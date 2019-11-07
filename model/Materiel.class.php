<?php
require_once('Produit.class.php');

class Materiel extends Produit{
  private $constructeur;
  private $type;
  private $nom;

  function __construct(array $array, int $quantite=0){
    Produit::__construct($array['intitule'], $array['info'], $array['prix'], $array['ref'], $array['categorie'], $array['img'],$quantite);

    if(isset($array['constructeur'])){
      $this->constructeur=$array['constructeur'];
    }

    $this->type = $array['type'] ?? "autre";
    $this->nom = $array['nom'] ?? "inconnue";

    assert(isset($this->constructeur));
  }
  //Getters
  public function getConstructeur(){
    return $this->constructeur;
  }

  public function getType(){
    return $this->type;
  }

  public function getNom(){
    return $this->nom;
  }

} ?>
