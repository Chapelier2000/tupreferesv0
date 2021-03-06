<?php

class Ctr_message extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("message", $action);
        $this->table="message";
        $this->classTable = "Message";
        $this->cle = "mes_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Message::selectAll("message");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Message($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Message();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=message");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Message::supprimer("message","mes_id",$_GET["id"]);
		}
		header("location:index.php?m=message");
	}
}

?>