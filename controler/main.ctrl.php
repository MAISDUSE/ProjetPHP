<?php
require_once('../model/ProduitDAO.class.php');
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');



// Inclus le mini framework
include('../framework/view.class.php');

$view = new View("main.view.php");


$config = parse_ini_file('../config/config.ini');
$jukebox = new VinyleDAO($config['database_path']);




//$view->types=



$view->show();
?>
