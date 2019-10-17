<?php
class Produit {
  protected intitule;
  protected info;
  protected prix;
  protected ref;
  protected categorie;
  protected img;
  protected quantite;

  function __construct(string $intitule=NULL,string $info=NULL,float $prix=0,string $ref=NULL,string $categorie=NULL,string $img,int $quantite) {
    $this->quantite = $quantite;

    if (isset($intitule)){
      $this->intitule=$intitule;
      $this->info=$info;
      $this->prix=$prix;
      $this->ref=$ref;
      $this->categorie=$categorie;
    }

    //Contraintes d'intégrité

    assert(isset($this->intitule));
    assert(isset($this->info));
    assert(isset($this->prix));
    assert(isset($this->ref));
    assert(isset($this->categorie));

    assert($this->quantite > 0);
    assert($this->prix > 0);
  }

  //Getters

  public getIntitule() {
    return $this->intitule;
  }

  public getInfo() {
    return $this->info;
  }

  public getPrix() {
    return $this->prix;
  }

  public getRef() {
    return $this->ref;
  }

  public getCategorie() {
    return $this->categorie;
  }

  public getImg() {
    return $this->img;
  }

  public getQuantite(){
    return $this->quantite;
  }

  public getPrixTotal(){
    return $this->quantite*$this->prix;
  }

}


 ?>
