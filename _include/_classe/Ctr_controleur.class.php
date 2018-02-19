<?php
//liste des utilisateurs
class Ctr_controleur {
	public $module;
    public $action;
    public $gabarit;
    public $vue;
    public $menu;
	
	public function __construct($module, $action, $gabarit="inc_gabarit.php") {
        $this->module = $module;
        $this->action = $action;
        $this->menu = $module;
        $this->gabarit ="../_gabarit/$gabarit";
        $this->vue = "../_module/{$module}/vue_{$module}_{$action}.php";
    }
}