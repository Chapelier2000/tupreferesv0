<?php

class Ctr_item extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("item", $action);
        $this->table="item";
        $this->classTable = "Item";
        $this->cle = "ite_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Item::selectAll("item");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Item($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Item();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=item");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Item::supprimer("item","ite_id",$_GET["id"]);
		}
		header("location:index.php?m=item");
	}
}

?>