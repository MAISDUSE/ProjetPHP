
<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();

$config = parse_ini_file('../config/config.ini');

$materiel= unserialize(urldecode($_POST['materiel']));
var_dump($materiel);

$view->assign("materiel",$materiel);

$view->display("../view/materiel.view.php");
?>
