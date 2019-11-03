<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();
$config = parse_ini_file('../config/config.ini');
//initialisation des vyniles
$jukebox = new VinyleDAO($config['db_path']);
//var_dump($jukebox);

//Variable catVinyle
$genre = $_GET['genre'];
$view->assign("genre",$genre);
$view->assign("vinyles",$jukebox->getVinyleGenre($genre));

//Affichage
$view->display("catVinyle.view.php");
?>
