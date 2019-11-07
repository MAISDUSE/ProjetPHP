<?php
require_once("Materiel.class.php");

class MaterielDAO {
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

  function getAllTypes() : array{
    $req = "SELECT DISTINCT type FROM Materiel";
    $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);

    $result=array($lancement);
    // Verification que l'objet a été trouvé
    $types = array();
    foreach($result[0] as $type){
      array_push($types,$type['type']);
    }
    if (count($types)>0 ) {
      //var_dump($types);
      return $types;
    } elseif (count($types) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }

  function getAllConstructeurs() : array{
    $req = "SELECT DISTINCT constructeur FROM Materiel";
    $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);

    $result=array($lancement);
    // Verification que l'objet a été trouvé
    $constructeurs = array();
    foreach($result[0] as $constructeur){
      array_push($constructeurs,$constructeur['constructeur']);
    }
    if (count($constructeurs)>0 ) {
      return $constructeurs;
    } elseif (count($constructeurs) == 0) {
      throw new Exception('Erreur dans '.__METHOD__."()");
    } else {
      throw new Exception('Erreur dans '.__METHOD__);
    }
  }

  function getMaterielPresentation() : array {
    $types = $this->getAllTypes();


    $result=array();
    foreach($types as $type){
      $req ="SELECT * FROM Materiel WHERE type='$type' LIMIT 1";
      $lignedb = $this->db->query($req);
      $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);
      $matos = new Materiel($lancement[0]);
      array_push($result, $matos);

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

  function getMateriels( $type,  $constructeur) : array{
    $result=array();
    $addAND = FALSE;
    $req ="SELECT * FROM Materiel";
    if($type != "Tous" || $constructeur != "Tous" ){
      $req .= " WHERE";
    }
    if($type != "Tous"){
      $req .=  " type='$type'";
      $addAND = TRUE;
    }
    if($constructeur != "Tous"){
      if ($addAND) {
          $req .= " AND";
      }
      $req .= " constructeur='$constructeur'";
      $addAND = TRUE;
    }
   $lignedb = $this->db->query($req);
    $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);
    foreach ($lancement as $materiel) {
      $objMateriel = new Materiel($materiel);
      array_push($result, $objMateriel);
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
