
<?php
require_once('../model/VinyleDAO.class.php');
require_once('../model/MaterielDAO.class.php');

// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();
$config = parse_ini_file('../config/config.ini');

$vinyle= unserialize(urldecode($_POST['vinyle']));

$view->assign("vinyle",$vinyle);

$view->display("vinyle.view.php");
?>
