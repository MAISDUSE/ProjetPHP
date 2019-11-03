  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vinylooper</title>
    <link rel="stylesheet" href="../view/design/style.css">
  </head>
  <body>

    <header>
      <a href="../controler/main.ctrl.php"><img src="" alt="Vinylooper Logo" class="logo"></a> <!--Logo-->
      <nav>
        <ul class="nav_mid">
          <li><a href="#">Vinyles</a></li> <!--Vinyles-->
          <li><a href="#">Matériel</a></li> <!--Matériel-->
          <li><a href="#">Assistance</a></li> <!--FAQ-->
          <li><a href="#"><img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav"></a></li> <!--Panier-->
          <li><a href="#"><img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav"></a></li> <!--Se connecter-->
        </ul>
      </nav>
    </header>

    <section>
     <h2>Vinyles</h2>
      <div class="cat"> <!--Nos vinyles-->
          <?php
          foreach($genrespres as $vinyle){ //Parcours array list des genres de vinyle récuperés depuis la bd et on recupère chaque premier vinyle de chaque genre pour avoir l'illsutration
            ?>
            <div class="">
              <a href="../controler/catVinyle.ctrl.php?genre=<?= $vinyle->getGenre() ?>"><p><?= $vinyle->getGenre() ?></p></a>
              <a href="../controler/catVinyle.ctrl.php?genre=<?= $vinyle->getGenre() ?>"><img class="cover" src="../model/data/img/<?= $vinyle->getImg() ?>" alt="<?= $vinyle->getIntitule()?>"/></a>
            </div>

          <?php } ?>
          <a href="#">Voir Plus</a>
        </div>

        <h2>Matériel</h2>
        <div class="cat"> <!--Notre matériel-->
            <?php
            foreach($typespres as $matos){ //Parcours array list des genres de vinyle récuperés depuis la bd et on recupère chaque premier vinyle de chaque genre pour avoir l'illsutration
              ?>
              <div class="">

                <a href=""><p><?= $matos->getType() ?></p></a>
                <a href=""><img class="cover" src="../model/data/img/<?= $matos->getImg() ?>" alt="<?= $matos->getIntitule()?>"/></a>

             </div>
            <?php } ?>

          <a href="#">Voir Plus</a>
        </div>
      </section>

      <footer>
        <ul class="footer">
          <li>Copyright (c) 2019 Vinylooper</li>
          <li><a href="#">Nous contacter</a></li>
        </ul>
      </footer>
    </body>
    </html>
