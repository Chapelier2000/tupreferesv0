<?php

class Ctr_utilisateur extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("utilisateur", $action);
        $this->table="utilisateur";
        $this->classTable = "Utilisateur";
        $this->cle = "uti_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Utilisateur::selectAll("utilisateur");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Utilisateur($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Utilisateur();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=utilisateur");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Utilisateur::supprimer("utilisateur","uti_id",$_GET["id"]);
		}
		header("location:index.php?m=utilisateur");
	}
}

?>