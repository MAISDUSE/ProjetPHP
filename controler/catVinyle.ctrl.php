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
$allGenres = $jukebox->getAllGenres();
$allArtistes = $jukebox->getAllArtistes();
$allAnnees = $jukebox->getAllAnnees();
$allLabels = $jukebox->getAllLabels();

$view->assign("allGenres",$allGenres);
$view->assign("allArtistes",$allArtistes);
$view->assign("allAnnees",$allAnnees);
$view->assign("allLabels",$allLabels);


$genreC = $_GET['genre'] ?? $_POST['genreChoisi'] ?? "Tous";
$artisteC = $_POST['artisteChoisi'] ?? "Tous";
$anneeC = $_POST['anneeChoisi'] ?? "Tous";
$labelC = $_POST['labelChoisi'] ?? "Tous";

$view->assign("genreC",$genreC);
$view->assign("artisteC",$artisteC);
$view->assign("anneeC",$anneeC);
$view->assign("labelC",$labelC);
try {
  $vinylesDispo = $jukebox->getVinyles($genreC, $artisteC, $anneeC, $labelC);

} catch (\Exception $e) {

}

$view->assign("vinylesDispo",$vinylesDispo);





//Affichage
$view->display("catVinyle.view.php");
?>
