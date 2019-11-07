<?php
$config = parse_ini_file('../config/config.ini');

require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

$jukebox = new VinyleDAO($config['db_path']);
$matos = new MaterielDAO($config['db_path']);
$genre = "Tous";
$artiste = "Tous";
$annee = "Tous";
$label = "Tous";
var_dump($jukebox->getVinyles($genre,$artiste,$annee,$label));
var_dump($jukebox->getAllLabels());
var_dump($jukebox->getAllGenres());
var_dump($jukebox->getAllAnnees());
var_dump($jukebox->getAllArtistes());
print("selected=yes");

var_dump($matos->getMateriels("Tous","Tous"));

 ?>
