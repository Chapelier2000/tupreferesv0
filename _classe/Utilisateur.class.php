<?php
class Utilisateur extends Entity {
	public function __construct($id=0) {
		parent::__construct("utilisateur", "uti_id",$id);
	}
}
?>
