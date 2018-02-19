<?php

class Ctr_utiquestion extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("utiquestion", $action);
        $this->table="utiquestion";
        $this->classTable = "Utiquestion";
        $this->cle = "uti_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Utiquestion::selectAll("utiquestion");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Utiquestion($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Utiquestion();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=utiquestion");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Utiquestion::supprimer("utiquestion","uti_id",$_GET["id"]);
		}
		header("location:index.php?m=utiquestion");
	}
}

?>