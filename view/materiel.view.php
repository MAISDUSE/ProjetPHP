<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vinylooper</title>
  <link rel="stylesheet" href="../view/design/style.css">
</head>
<body>

  <header class="menu">
    <a href="../controler/main.ctrl.php"><img src="" alt="Vinylooper Logo" class="logo"></a> <!--Logo-->
    <nav>
      <ul id="nav_left">
        <li><a href="../controler/main.ctrl.php"><img src="" alt="Vinylooper Logo" class="logo"></a></li> <!--Logo-->
      </ul>
      <ul id="nav_mid">
        <li><a href="../controler/catVinyle.ctrl.php">Vinyles</a></li> <!--Vinyles-->
        <li><a href="#">Matériel</a></li> <!--MatÃ©riel-->
        <li><a href="#">Assistance</a></li> <!--FAQ-->
        <li><a href="#" id="panier">Panier</a></li> <!--Panier--> <!--<img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav">-->
        <li><a href="../controler/register.ctrl.php">Se connecter</a></li> <!--Se connecter--> <!--<img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav">-->
      </ul>
    </nav>
  </header>
  <h2><?=$materiel->getIntitule()?></h2>
  <section class="vinyle">

  <img src="../model/data/img/<?= $materiel->getImg() ?>" alt="<?=$materiel->getIntitule()?>">


      <article class="">
        <div class="tout">
          <div class="vinyleInfo">
              <p>REF : <?=$materiel->getRef()?> </p>

              <p>Modéle : <?=$materiel->getNom()?></p>

              <form  action="catMateriel.ctrl.php" method="post">
                  <p>constructeur : <input type="submit" name="artisteChoisi" value="<?=$materiel->getConstructeur()?>"></p>
              </form>

              <form  action="catMateriel.ctrl.php" method="post">
                  <p>Type : <input type="submit" name="genreChoisi" value="<?=$materiel->getType()?>"></p>
              </form>


          </div>


          <div class="ajoutePanier">
              <form class="" action="" method="post">

                Quantité :<input type="number" id="quantiteChoisi" name="quantiteChoisi" min="0" max="100">
                <p>Prix : <?= $materiel->getPrix()?>€/par unité</p>
                <input type="hidden" name="materielChoisi" value="<?= urlencode(serialize($materiel))?>">
                <input type="submit" name="panier" value="Ajouter au panier">
              </form>
          </div>

        </div>
        <p class="non"><?=$materiel->getInfo()?></p>
      </article>


  </section>
    <footer>
      <ul class="footer">
        <li>Copyright (c) 2019 Vinylooper</li>
        <li><a href="#">Nous contacter</a></li>
      </ul>

    </footer>
  </body>
  </html>
