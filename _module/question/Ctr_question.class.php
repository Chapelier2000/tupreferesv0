<?php

class Ctr_question extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("question", $action);
        $this->table="question";
        $this->classTable = "Question";
        $this->cle = "que_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Question::selectAll("question");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Question($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Question();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=question");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Question::supprimer("question","que_id",$_GET["id"]);
		}
		header("location:index.php?m=question");
	}
}

?>