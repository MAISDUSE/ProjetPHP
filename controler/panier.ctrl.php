<?php
session_start();

include_once("../model/fonctions_panier.php");
// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();


$action=(isset($_POST['action'])?$_POST['action']  :  (isset($_GET['action']) )?$_GET['action'] : null);
if($action!=null){

  //récuperation des variables en POST ou GET
  $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
  $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
  $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

//Si l'on modifie la quantité de plusierus article d'un coup, $q devietn un array
  if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = $contenu;
      }
   }
   else
   $q = intval($q);
//En fonction de l'action recupérée
  switch($action){
    Case "ajout":
    ajouterArticle($l,$q,$p);
    break;

    Case "suppression":
    supprimerArticle($l);
    break;

    Case "refresh":
    for ($i = 0 ; $i < count($QteArticle) ; $i++)
    {
      modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],$QteArticle[$i]);
    }
    break;

    Default:
    break;
  }
}

if (creationPanier())
{
  $nbArticles=compterArticles();
  if ($nbArticles <= 0){
    $vide="Votre panier est vide";
    $view->assign('vide',$vide);
  }else
  {
    $view->assign('panier_libelles',$_SESSION['panier']['libelleProduit']);
    $view->assign('panier_quantites',$_SESSION['panier']['qteProduit']);
    $view->assign('panier_prix',$_SESSION['panier']['prixProduit']);
    $view->assign('prix_Total',MontantTotal());
    $view->assign('nbArticles',$nbArticles);

  }
}
$view->display("panier.view.php");
?>
