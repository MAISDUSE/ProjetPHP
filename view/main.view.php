<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vinylooper</title>
  <link rel="stylesheet" href="../view/design/style.css">
</head>
<body>

  <header class="menu">
    <nav>
      <ul id="nav_left">
        <li><a href="../controler/main.ctrl.php"><img src="" alt="Vinylooper Logo" class="logo"></a></li> <!--Logo-->
      </ul>
      <ul id="nav_mid">
        <li><a href="../controler/catVinyle.ctrl.php">Vinyles</a></li> <!--Vinyles-->
        <li><a href="../controler/catMateriel.ctrl.php">Matériel</a></li> <!--MatÃ©riel-->
        <li><a href="../controler/panier.ctrl.php" id="panier">Panier</a></li> <!--Panier--> <!--<img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav">-->
        <li><a href="../controler/register.ctrl.php">Se connecter</a></li> <!--Se connecter--> <!--<img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav">-->
      </ul>
    </nav>
  </header>

  <section>
   <h2>Vinyles</h2>
    <div class="cat"> <!--Nos vinyles-->
      <div class="displayObjets">
        <?php
        foreach($genrespres as $vinyle){ //Parcours array list des genres de vinyle rÃ©cuperÃ©s depuis la bd et on recupÃ¨re chaque premier vinyle de chaque genre pour avoir l'illsutration
          ?>
          <div class="">
            <a href="../controler/catVinyle.ctrl.php?genre=<?= $vinyle->getGenre() ?>"><p><?= $vinyle->getGenre() ?></p></a>
            <a href="../controler/catVinyle.ctrl.php?genre=<?= $vinyle->getGenre() ?>"><img class="cover" src="../model/data/img/<?= $vinyle->getImg() ?>" alt="<?= $vinyle->getIntitule()?>"/></a>
          </div>
        <?php } ?>
        </div>
        <a href="../controler/catVinyle.ctrl.php" class="plus">Voir Plus...</a>
      </div>

      <h2>Matériel</h2>
      <div class="cat"> <!--Notre matÃ©riel-->
        <div class="displayObjets">
          <?php
          foreach($typespres as $matos){ //Parcours array list des genres de vinyle rÃ©cuperÃ©s depuis la bd et on recupÃ¨re chaque premier vinyle de chaque genre pour avoir l'illsutration
            ?>
            <div class="">
              <a href="../controler/catMateriel.ctrl.php?type=<?= $matos->getType()?>"><img class="cover" src="../model/data/img/<?= $matos->getImg() ?>" alt="<?= $matos->getIntitule()?>"/></a>
              <a href="../controler/catMateriel.ctrl.php?type=<?= $matos->getType()?>"><p><?= $matos->getType() ?></p></a>
            </div>
          <?php } ?>
        </div>
        <a href="../controler/catMateriel.ctrl.php" class="plus">Voir Plus...</a>
      </div>
    </section>

    <footer>
      <ul class="footer">
        <li>Copyright (c) 2019 Vinylooper</li>
        <li><a href="../controler/contact.ctrl.php">Nous contacter</a></li>
      </ul>
    </footer>
  </body>
  </html>
