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
        <li><a href="#">Assistance</a></li> <!--FAQ-->
        <li><a href="#" id="panier">Panier</a></li> <!--Panier--> <!--<img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav">-->
        <li><a href="../controler/register.ctrl.php">Se connecter</a></li> <!--Se connecter--> <!--<img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav">-->
      </ul>
    </nav>

    <section class="catFormulaire">
        <form action="../controler/catMateriel.ctrl.php" method="post">

          <div class="">Type :
            <select name="typeChoisi" id="typeChoisi">
                <option  value="Tous">Tous</option>
                <?php foreach ($allTypes as $type) { ?>
                <option <?php if ($typeC==$type) {print("selected");} ?> value="<?= $type ?>"><?= $type ?></option>
                <?php } ?>
            </select>
          </div>

            <div class="">Constructeur :
              <select name="constructeurChoisi" id="constructeurChoisi">
                <option  value="Tous">Tous</option>
                <?php foreach ($allConstructeurs as $constructeur) { ?>
                  <option <?php if ($constructeurC==$constructeur) {print("selected");} ?> value="<?= $constructeur ?>"><?= $constructeur ?></option>
                <?php } ?>
              </select>
           </div>

            <div class="">
                <input type="submit" name="valider" value="OK">
            </div>

        </form><br>
    </section>
  </header>


  <section class="viewCatSec">
    <?php foreach ($materielsDispo as $materiel) { ?>
      <div class="viewCatDiv">

        <form  action="../controler/materiel.ctrl.php" method="post">
            <p><?=$materiel->getIntitule()?></p>
            <input type="hidden" id="materiel" name="materiel"   value="<?= urlencode(serialize($materiel))?>" >
            <input type="image"  name="img" value="<?= $materiel->getIntitule() ?>" src="../model/data/img/<?= $materiel->getImg() ?>" >
        </form>

      </div>
     <?php } ?>
     <?php
     if (count($materielsDispo)==0) {
       print("<p>Aucun matériel trouvé... </p> \n");
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
