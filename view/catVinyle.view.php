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
        <li><a href="#" id="panier">Panier</a></li> <!--Panier--> <!--<img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav">-->
        <li><a href="../controler/register.ctrl.php">Se connecter</a></li> <!--Se connecter--> <!--<img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav">-->
      </ul>
    </nav>
    <section class="catFormulaire">
      <form action="../controler/catVinyle.ctrl.php" method="post">

        <div class="">Genres :
          <select name="genreChoisi" id="genreChoisi">
            <option  value="Tous">Tous</option>
            <?php foreach ($allGenres as $genre) { ?>
              <option <?php if ($genreC==$genre) {print("selected");} ?> value="<?= $genre ?>"><?= $genre ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="">Artistes :
          <select name="artisteChoisi">
            <option  value="Tous">Tous</option>
            <?php foreach ($allArtistes as $artiste) { ?>
              <option <?php if ($artisteC==$artiste) {print("selected");} ?> value="<?= $artiste ?>"><?= $artiste ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="">Années :
          <select name="anneeChoisi" id="anneeChoisi">
            <option value="Tous">Tous</option>
            <?php foreach ($allAnnees as $annee) { ?>
              <option <?php if ($anneeC==$annee) {print("selected");} ?> value="<?= $annee ?>"><?= $annee ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="">Labels :
          <select name="labelChoisi" id="labelChoisi">
            <option value="Tous">Tous</option>
            <?php foreach ($allLabels as $label) { ?>
              <option  <?php if ($labelC==$label) {print("selected");} ?> value="<?= $label ?>"><?= $label ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="">
          <input type="submit" name="valider" value="OK">
        </div>

      </form>
    </section>
  </header>


  <section class="viewCatSec">
    <?php foreach ($vinylesDispo as $vinyle) { ?>
      <div class="viewCatDiv">

        <form  action="../controler/vinyle.ctrl.php" method="post">
          <p><?=$vinyle->getIntitule()?></p>
          <input type="hidden" id="vinyle" name="vinyle"   value="<?= urlencode(serialize($vinyle))?>" >
          <input type="image"  name="img" value="<?= $vinyle->getIntitule() ?>" src="../model/data/img/<?= $vinyle->getImg() ?>" >
        </form>

      </div>
      <?php } ?>
      <?php
        if (count($vinylesDispo)==0) {
          print("<p>Aucun vinyle trouvé... </p> \n");
          print("<p><a href=\"../controler/main.ctrl.php\">Retour au menu principal</a></p> \n");
      }
    ?>
  </section>

  <footer>
    <ul class="footer">
      <li>Copyright (c) 2019 Vinylooper</li>
      <li><a href="#">Nous contacter</a></li>
    </ul>
  </footer>
</body>
</html>
