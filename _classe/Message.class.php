<?php
class Message extends Entity {
	public function __construct($id=0) {
		parent::__construct("message", "mes_id",$id);
	}
}
?>
