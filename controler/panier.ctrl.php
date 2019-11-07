<?php
session_start()


// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();

$view->assign('panier',$_SESSION['panier']);


?>
