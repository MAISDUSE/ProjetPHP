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


    <h2><?= $genre ?></h2>
    <section class="viewCatSec">
      <?php foreach ($vinyles as $vinyle) { ?>
        <div class="viewCatDiv">
          <p><?=$vinyle->getIntitule()?></p>
          <img class="cover" src="../model/data/img/<?= $vinyle->getImg() ?>" alt="">
        </div>
       <?php } ?>
     </section>

      <footer>
        <ul class="footer">
          <li>Copyright (c) 2019 Vinylooper</li>
          <li><a href="#">Nous contacter</a></li>
        </ul>
      </footer>
    </body>
    </html>
