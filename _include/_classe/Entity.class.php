<?php
class Entity {
	static $link;
	
	public $table;	//nom de la table
	public $cle;   	//Nom du champ clé primaire
	public $data; 	//tableau représentant un enregistrement
	
	/**
	 * Constructeur
	 *
	 * @param string $table        	
	 * @param string $cle        	
	 * @param string $id : si >0 charge un enregistrement depuis la BDD        	
	 */
	public function __construct($table, $cle,$id=0) {
		$this->table = $table;
		$this->cle = $cle;
		$this->data = array ();
		if ($id==0)
			$this->init();
		else
			$this->charger($id);
	}
	
	/**
	*/
	static function setLink($link) {
		self::$link=$link;
	}
	
	/**
	 * Retourne tous les enregistrements de la table
	 * 
	 * @return mysqli_result
	 */
	static function selectAll($table) {
		$sql="select * from $table";
		$result=mysqli_query(self::$link, $sql) or die(mysqli_error(self::$link));	
		return $result;
	}
	
	/**
	 * Charge un enregistrement depuis la base de données
	 *
	 * @param integer $id        	
	 */
	function charger($id) {
		$sql="select * from $this->table where $this->cle=$id";
		$result = mysqli_query(self::$link, $sql) or die(mysqli_error(self::$link));
		$this->data=mysqli_fetch_assoc($result);
	}
	
	function init() {
		$champs=self::getChamps($this->table);
		foreach($champs as $valeur) {
			$this->data[$valeur]="";
		}		
		$this->data[$this->cle]=0;
	}
	
	/**
	 * Charge un enregistrement depuis un tableau
	 *
	 * @param array $tab
	 */
	function chargerDepuisTableau(array $tab) {
		$champs=self::getChamps($this->table);
		foreach($champs as $valeur) {
			$this->data[$valeur]=$tab[$valeur];
		}		
	}
	
	/**
	 * retourne un tableau contenant le nom des champs de la table
	 *
	 * @return array
	 */
	static function getChamps($table) {
		$sql="show columns from $table";
		$result = mysqli_query(self::$link, $sql);
		while ($row=mysqli_fetch_assoc($result)) {
			$champs[]=$row["Field"];
		}
		return $champs;
	}
	
	/**
	 * retourne la chaine SQL de mise a jour d'un enregistrement de $table
	 *
	 * @return string
	 */
	static function updateSql($table, $pk, $champs,$data) {
		$data=array_map("mres",$data);
		extract($data);
		foreach($champs as $nom) {
			if ($nom!=$pk)
				$tab[]=$nom . "='" . $$nom . "'";
		}

		$sql="update $table set " . implode(",",$tab) . " where $pk=" . $$pk;
		return $sql;
	}

	/**
	 * retourne la chaine SQL d'insertion d'un enregistrement dans $table
	 *
	 * @return string
	 */
	static function insertSql($table, $pk, $champs,$data) {
		$data=array_map("mres",$data);
		extract($data);
		foreach($champs as $nom) {
			if ($nom!=$pk)
				$tab[]="'" . $$nom . "'";
		}

		$sql="insert into $table values (null," . implode(",",$tab) . ")";
		return $sql;
	}
	
	
	/**
	 * Enregistre en base de données l'enregistrement $this->data
	 * si id > 0 update SINON insert
	 */
	function sauver() {
		if ($this->data[$this->cle]>0) {
			$sql=self::updateSql($this->table, $this->cle, self::getChamps($this->table), $this->data);
		} else {
			$sql=self::insertSql($this->table, $this->cle, self::getChamps($this->table), $this->data);
		}
		mysqli_query(self::$link, $sql) or die(mysqli_error(self::$link));
		if ($this->data[$this->cle]==0) {
			$this->data[$this->cle]=mysqli_insert_id(self::$link);
		}	
	}
	
	/**
	 * retourne la chaine SQL de suppression d'un enregsitrement
	 *
	 * @param string $table 	: Nom de la table
	 * @param string $cle		: Nom de la clé primaire
	 * @param integer $id		: id de l'enregistrement
	 */
	static function supprimer($table,$cle,$id) {
		$id=mres($id);
		$sql="delete from $table where $cle=$id";
		mysqli_query(self::$link, $sql) or die(mysqli_error(self::$link));
	}
	
	/**
	 * fonction générique pour générer les balises OPTION d'un SELECT
	 *
	 * @param string $sql requete sql
	 * @param string $pk nom du champ cle primaire
	 * @param string $label nom du champ à afficher dans la balise OPTION
	 * @param integer $id valeur à préselectionner
	 */
	static public function HTMLselect($sql,$pk,$label,$id) {
		$resultat=mysqli_query(self::$link, $sql);
		$s="";
		while ($tab = mysqli_fetch_assoc($resultat) ) {
			if ($tab[$pk]==$id)
				$sel= " selected ";
			else 
				$sel="";
			
			$s=$s . "<option $sel value='$tab[$pk]'>$tab[$label]</option>";		
		}
		return $s;
	}
}
?>