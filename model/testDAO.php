<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');
$jukebox = new VinyleDAO($config['db_path']);
$jukebox->getVinyleGenre("Classique");

 ?>
