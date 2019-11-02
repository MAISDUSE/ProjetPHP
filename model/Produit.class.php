<?php
class Produit {
  protected $intitule;
  protected $info;
  protected $prix;
  protected $ref;
  protected $categorie;
  protected $img;
  protected $quantite;

  function __construct(string $intitule=NULL,string $info=NULL,float $prix=0,string $ref=NULL,string $categorie=NULL,string $img,int $quantite) {
    $this->quantite = $quantite;

    if (isset($intitule)){
      $this->intitule=$intitule;
      $this->info=$info;
      $this->prix=$prix;
      $this->ref=$ref;
      $this->categorie=$categorie;
      $this->img=$img;
    }

    //Contraintes d'intégrité

    assert(isset($this->intitule));
    assert(isset($this->info));
    assert(isset($this->prix));
    assert(isset($this->ref));
    assert(isset($this->categorie));
    assert(isset($this->img));
    assert($this->quantite >= 0);
    assert($this->prix >= 0);
  }

  //Getters

  public function getIntitule() {
    return $this->intitule;
  }

  public function getInfo() {
    return $this->info;
  }

  public function getPrix() {
    return $this->prix;
  }

  public function getRef() {
    return $this->ref;
  }

  public function getCategorie() {
    return $this->categorie;
  }

  public function getImg() {
    return $this->img;
  }

  public function getQuantite(){
    return $this->quantite;
  }

  public function getPrixTotal(){
    return $this->quantite*$this->prix;
  }

}


 ?>
