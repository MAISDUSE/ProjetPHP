<?php
class Vinyle extends Produit {
  private genre;
  private taille;
  private annee;
  private artiste;
  private album;
  private label;

  function __construct(string $intitule=NULL,string $info=NULL,float $prix=0,
  string $ref=NULL,string $categorie=NULL,string $img,int $genre=99,
  int $taille=0, int $annee=NULL,string $artiste=NULL,
  string $album=NULL, string $label="Non défini", int $quantite)
  {
    Produit::__construct($intitule, $info, $prix, $ref, $categorie, $img);

    //On initialise $artiste et $album
    if(isset($artiste) && isset($album)){
      $this->artiste=$artiste;
      $this->album=$album;
    }

    //On vérifie qu'ils ne sont pas NULL
    assert(isset($this->artiste));
    assert(isset($this->album));

    //On initialise $genre
    //Genre donné en int, si genre inexistant = "Autre"
    if($genre==0){

    } else {
      $this->genre="Autre";
    }

    //On intialise $taille en pouce
    $this->taille = $taille.'"';

    //On initialise $annee
    if(isset($annee)){
      $this->annee=$annee;
    } else {
      $this->annee="Non définie";
    }

    //On initialise $label
    $this->label=$label;
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
