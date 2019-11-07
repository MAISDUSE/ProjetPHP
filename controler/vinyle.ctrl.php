<?php session_start();?>
<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

// Inclus le mini framework
include('../framework/view.class.php');
include('../model/fonctions_panier.php');

$view = new View();
$config = parse_ini_file('../config/config.ini');
//


$vinyle= unserialize(urldecode($_POST['vinyle']));
$view->assign("vinyle",$vinyle);




//ajout au panier
if(isset($_POST['panier'])){
  $vinyle= unserialize(urldecode($_POST['vinyle']));
  ajouterArticle($vinyle->getIntitule(),$_POST['quantiteChoisi'],$vinyle->getPrix());
}

$view->display("vinyle.view.php");
?>
