<?php session_start() ?>
<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

// Inclus le mini framework
include('../framework/view.class.php');
//inclusuon des fonction sur le panier de la session
include('../model/fonctions_panier.php');

$view = new View();

$config = parse_ini_file('../config/config.ini');

$materiel= unserialize(urldecode($_POST['materiel']));

$view->assign("materiel",$materiel);

//ajout au panier
if(isset($_POST['panier'])){
  $materiel= unserialize(urldecode($_POST['materiel']));
  ajouterArticle($materiel->getIntitule(),$_POST['quantiteChoisi'],$materiel->getPrix());
}

$view->display("../view/materiel.view.php");
?>
