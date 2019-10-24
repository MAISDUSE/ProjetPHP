<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');



// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();


$config = parse_ini_file('../config/config.ini');
$jukebox = new VinyleDAO($config['db_path']);
var_dump($jukebox);



$view->assgin("genrespres",$jukebox->getVinylesPresentation());



$view->display("main.view.php");
?>
