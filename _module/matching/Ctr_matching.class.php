<?php

class Ctr_matching extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("matching", $action);
        $this->table="matching";
        $this->classTable = "Matching";
        $this->cle = "mat_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Matching::selectAll("matching");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Matching($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Matching();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=matching");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Matching::supprimer("matching","mat_id",$_GET["id"]);
		}
		header("location:index.php?m=matching");
	}
}

?>