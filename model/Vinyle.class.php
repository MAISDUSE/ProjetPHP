<?php
require_once('Produit.class.php');

class Vinyle extends Produit {
  private $genre;
  private $annee;
  private $artiste;
  private $album;
  private $label;

  function __construct(array $array, int $quantite =0)
    {
      Produit::__construct($array['intitule'], $array['info'], $array['prix'], $array['ref'], $array['categorie'], $array['img'],$quantite);

      //On initialise $artiste et $album
      if(isset($array['artiste']) && isset($array['album'])){
        $this->artiste=$array['artiste'];
        $this->album=$array['album'];
      }

      //On vérifie qu'ils ne sont pas NULL
      assert(isset($this->artiste));
      assert(isset($this->album));

      //On initialise $genre, si genre inexistant = "Autre"
      $this->genre=$array['genre'] ?? "Autre";

      //On initialise $annee
      if(isset($array['annee'])){
        $this->annee=$array['annee'];
      } else {
        $this->annee="Non définie";
      }

      //On initialise $label
      $this->label=$array['label'] ?? "Non définie";
    }

  //Getters
  public function getArtiste(){
    return $this->artiste;
  }

  public function getAlbum(){
    return $this->album;
  }

  public function getGenre(){
    return $this->genre;
  }

  public function getTaille(){
    return $this->taille;
  }

  public function getAnnee(){
    return $this->annee;
  }

  public function getLabel(){
    return $this->label;
  }
}
 ?>
