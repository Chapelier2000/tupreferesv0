<?php

class Ctr_affinite extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("affinite", $action);
        $this->table="affinite";
        $this->classTable = "Affinite";
        $this->cle = "aff_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Affinite::selectAll("affinite");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Affinite($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Affinite();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=affinite");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Affinite::supprimer("affinite","aff_id",$_GET["id"]);
		}
		header("location:index.php?m=affinite");
	}
}

?>