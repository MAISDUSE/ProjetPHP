<?php
$config = parse_ini_file('../config/config.ini');

require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');
$jukebox = new VinyleDAO($config['db_path']);
$genre = NULL;
$artiste = NULL;
$annee = NULL;
$label = NULL;
var_dump($jukebox->getVinyle($genre,$artiste,$annee,$label));
var_dump($jukebox->getAllLabels());
var_dump($jukebox->getAllGenres());
var_dump($jukebox->getAllAnnees());
var_dump($jukebox->getAllArtistes());
print("selected=yes");
 ?>
