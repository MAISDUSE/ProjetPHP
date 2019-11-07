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
      sort($genres);
      return $genres;
    } elseif (count($genres) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }
  function getAllArtistes() : array{
    $req = "SELECT DISTINCT artiste FROM Vinyle";
    $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);

    $result=array($lancement);
    // Verification que l'objet a été trouvé
    $artistes = array();
    foreach($result[0] as $artiste){
      array_push($artistes,$artiste['artiste']);
    }
    if (count($artistes)>0 ) {
      sort($artistes);
      return $artistes;
    } elseif (count($artistes) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }
  function getAllAnnees() : array{
    $req = "SELECT DISTINCT annee FROM Vinyle";
    $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);

    $result=array($lancement);
    // Verification que l'objet a été trouvé
    $annees = array();
    foreach($result[0] as $annee){
      array_push($annees,$annee['annee']);
    }
    if (count($annees)>0 ) {
      sort($annees);
      return $annees;
    } elseif (count($annees) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }
  function getAllLabels() : array{
    $req = "SELECT DISTINCT label FROM Vinyle";
    $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);

    $result=array($lancement);
    // Verification que l'objet a été trouvé
    $labels = array();
    foreach($result[0] as $label){
      array_push($labels,$label['label']);
    }
    if (count($labels)>0 ) {
      sort($labels);
      return $labels;
    } elseif (count($labels) == 0) {
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

  function getVinyles( $genre,  $artiste,  $annee,  $label) : array{
    $result=array();
    $addAND = FALSE;
    $req ="SELECT * FROM Vinyle";
    if($genre != "Tous" || $artiste != "Tous" || $annee != "Tous" || $label != "Tous"){
      $req .= " WHERE";
    }
    if($genre != "Tous"){
      $req .=  " genre='$genre'";
      $addAND = TRUE;
    }
    if($artiste != "Tous"){
      if ($addAND) {
          $req .= " AND";
      }
      $req .= " artiste='$artiste'";
      //$addAND = TRUE;
    }
    if($annee != "Tous"){
      if ($addAND) {
          $req .= " AND";
      }
      $req .= " annee=$annee";
      //$addAND = TRUE;
    }
    if($label != "Tous"){
      if ($addAND) {
          $req .= " AND";
      }
      $req .= " label='$label'";
    }
   $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);
    foreach ($lancement as $vinyle) {
      $objVinyle = new Vinyle($vinyle);
      array_push($result, $objVinyle);
    }

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
