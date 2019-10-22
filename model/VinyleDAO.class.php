<?php
require_once("Vinyle.class.php");

class VinyleDAO {
  // L'objet local PDO de la base de données
  private $db;
  // Le type, le chemin et le nom de la base de données
  private $database = 'sqlite:../data/vinyle.db';

  //Constructeur
  function __construct() {
    try {
      $this->db = new PDO($this->database);
    }
    catch (PDOException $e) {
      die("erreur de connexion : ".$e->getMessage());
    }
  }
}
 ?>
