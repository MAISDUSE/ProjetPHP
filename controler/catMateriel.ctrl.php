<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();
$config = parse_ini_file('../config/config.ini');
//initialisation des vyniles
$matos = new MaterielDAO($config['db_path']);
//var_dump($jukebox);

//Variable catVinyle
$allTypes = $matos->getAllTypes();
$allConstructeurs = $matos->getAllConstructeurs();


$view->assign("allTypes",$allTypes);
$view->assign("allConstructeurs",$allConstructeurs);


$typeC = $_GET['type'] ?? $_POST['typeChoisi'] ?? "Tous";
$constructeurC = $_POST['constructeurChoisi'] ?? "Tous";


$view->assign("typeC",$typeC);
$view->assign("constructeurC",$constructeurC);

try {
  $materielsDispo = $matos->getMateriels($typeC,$constructeurC);

} catch (\Exception $e) {

}
$view->assign("materielsDispo",$materielsDispo);





//Affichage
$view->display("catMateriel.view.php");
?>
