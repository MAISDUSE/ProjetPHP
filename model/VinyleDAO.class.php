<?php
require_once("Vinyle.class.php");

class VinyleDAO {
  // L'objet local PDO de la base de données
  private $db;
  // Le type, le chemin et le nom de la base de données
  private $database;

  //Constructeur
  function __construct($chemin) {
    //$database=
    //var_dump($database);
    try {
      $this->db = new PDO("sqlite:../model/data/data.db");
    }
    catch (PDOException $e) {
      die("erreur de connexion : ".$e->getMessage());
    }
  }

  function getAllGenres() : array{
    $req = "SELECT DISTINCT genre FROM Vinyle";
    $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);
    $result=array($lancement);
    // Verification que l'objet a été trouvé
    if (count($result) == 1) {
      return $result[0];
    } elseif (count($result) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }

  function getVinylesPresentation() : array {
    $genres = array($this->getAllGenres());
    var_dump($genres);
    $result=array();
    foreach($genres as $genre){
      $req ="SELECT * FROM Vinyle WHERE genre='$genre' LIMIT 1";
      $lignedb = $this->db->query($req);
      $lancement = $lignedb->fetchAll(PDO::FETCH_CLASS, "Vinyle");

      array_push($result, $lancement);
    }
    // Verification que l'objet a été trouvé
    if (count($result)) {
      return $result[0];
    } elseif (count($result) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }
}
 ?>
