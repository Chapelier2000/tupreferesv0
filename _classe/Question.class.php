<?php
class Question extends Entity {
	public function __construct($id=0) {
		parent::__construct("question", "que_id",$id);
	}
}
?>
