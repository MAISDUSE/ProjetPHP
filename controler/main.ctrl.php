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
$view->assign("genrespres",$jukebox->getVinylesPresentation());

//initialisation du materiel hifi
$matos = new MaterielDAO($config['db_path']);
//var_dump($matos);
$view->assign("typespres",$matos->getMaterielPresentation());






$view->display("main.view.php");
?>
