<?php
class Produit extends Produit{
  private constructeur;
  private type;

  function __construct(string $intitule=NULL,string $info=NULL,float $prix=0,string $ref=NULL,string $categorie=NULL,string $img,
  int $type=99, string $constructeur=NULL, int $quantite){
    Produit::__construct($intitule, $info, $prix, $ref, $categorie, $img);

    if(isset($constructeur)){
      $this->constructeur=$constructeur;
    }

    if ($type == 0){

    } else {
      $type = "Autre";
    }

    assert(isset($this->constructeur));

    //Getters
    function getConstructeur(){
      return $this->constructeur;
    }

    function getType(){
      return $this->type;
    }
  }
} ?>
