<?php
/**	inc_config.php est inclus sur toutes les pages du site **/
session_start();
//Pour afficher les jours et mois en français
setlocale(LC_TIME, 'fr-FR.UTF8','fra');
//Pour l'heure locale
date_default_timezone_set('Europe/Paris');

/** Les constantes **/
define("SITE_NOM","Tu préfères");
define("DB_SERVER","localhost");
define("DB_USER","admin");
define("DB_PWD","");
define("DB_BDD","rencontre");

require "../_include/inc_fonction.php";
require "../_include/_classe/Entity.class.php";
require "../_include/_classe/Ctr_controleur.class.php";

spl_autoload_register('monAutoLoad');

$p=mysqli_connect(DB_SERVER, DB_USER, DB_PWD, DB_BDD);
Entity::setLink($p);
mysqli_set_charset($p, "utf8" );

?>