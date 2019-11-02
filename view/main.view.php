<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vinylooper</title>
  <link rel="stylesheet" href="../view/design/style.css">
</head>
<body>

  <header>
    <img src="" alt="Vinylooper Logo" class="logo"><!--Logo-->
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
    <div class=""> <!--Nos vinyles-->
      <ul class="LesDifferentsVinyles">
        <?php
        foreach($genrespres as $vinyle){ //parcours array list de genreq recupérer depuis bd et on recupére chaque premier vinyle de chaque genre pour avoir illsutration
          ?>
          <li>
              <a href="">
                <img class="cover" src="<?= $vinyle->getImg() ?>" alt="<?= $vinyle->getIntitule()?>"/>
                <p><?= $vinyle->getGenre() ?></p>
              </a>
          </li>
        <?php } ?>
      </ul>
      <!-- <button type="button" name="Voir plus"></button>
      pour limiter affichage a un nombre defini dans le foreach...-->
      <?php
      /*<h2>Matériel</h2>
      <div class=""> <!--Notre matériel-->
        <ul class="LesDifferentsMateriels">
          <?php
          foreach($types as $matos){ //parcours array list de types recupérer depuis bd et on recupére chaque premier matos de chaque pour illustartion
            ?>
            <a href="=<?= $matos->getType() ?>">
              <img class="cover" src="<?= $matos->getImg() ?>" />
            </a>
          <?php } ?>
        </ul>
        */?>
        <!-- <button type="button" name="Voir plus"></button>
        pour limiter affichage a un nombre defini dans le foreach...-->
      </div>
    </section>

    <footer>
      <ul class="footer">
        <li><a href="#">Assistance</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    </footer>
  </body>
  </html>
