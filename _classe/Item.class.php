<?php
class Item extends Entity {
	public function __construct($id=0) {
		parent::__construct("item", "ite_id",$id);
	}
}
?>
