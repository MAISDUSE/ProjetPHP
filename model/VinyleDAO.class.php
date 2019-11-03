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
    $genres = array();
    foreach($result[0] as $genre){
      array_push($genres,$genre['genre']);
    }
    if (count($genres)>0 ) {

      return $genres;
    } elseif (count($genres) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }

  function getVinylesPresentation() : array {
    $genres = $this->getAllGenres();


    $result=array();
    foreach($genres as $genre){
      $req ="SELECT * FROM Vinyle WHERE genre='$genre' LIMIT 1";
      $lignedb = $this->db->query($req);
      $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);
      $vinyle = new Vinyle($lancement[0]);
      array_push($result, $vinyle);

    }
    // Verification que l'objet a été trouvé

    if (count($result)!=0) {
      //var_dump($result);
      return $result;
    } elseif (count($result) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }

  }
}

 ?>
