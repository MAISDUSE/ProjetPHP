<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vinylooper</title>
  <link rel="stylesheet" href="../view/design/style.css">
</head>
<body>
  <div class="container">
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
    </header>
    <section id="connexion">


      <?php
      if(isset($_SESSION['email']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])){
        ?>
        <h1>Bienvenue sur votre profil</h1>
        <p>Votre Email :<?=$_SESSION['email'];?></p>
        <p>Votre Nom :<?=$_SESSION['nom'];?></p>
        <p>Votre Prenom :<?=$_SESSION['prenom'];?></p>
        <form method="post">
          <input type="submit" name="deconnexion" id="deconnexion" value="Se deconnecter">
        </form>

        <?php
      }else {
        ?>
        <p>Veuillez vous connecter à votre compte</p>
      <?php   }
      ?>
      <h2>Connexion - Log In</h2>
      <form method="post" class="infosconnexion" id="login">

        <div class="">
          <label for="lemail">Adresse e-mail : </label>
          <input type="email" name="lemail" id="lemail" placeholder="Votre email" required>
        </div>

        <div class="">
          <label for="lpassword">Mot de passe : </label>
          <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required>
        </div>

        <input type="submit" name="formlogin" id="formlogin" value="Se connecter">
        <p><?= $etat ?></p>
      </form>



      <h2>Inscription - Sign In</h2>
      <form method="post" class="infosconnexion" id="signin">

        <div class="">
          <label for="nom">Nom :</label>
          <input type="text" name="nom" placeholder="Votre Nom" required>
        </div>

        <div class="">
          <label for="prenom">Prénom : </label>
          <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required>
        </div>

        <div class="">
          <label for="semail">Adresse e-mail : </label>
          <input type="email" name="semail" id="semail" placeholder="Votre email" required>
        </div>

        <div class="">
          <label for="password">Mot de passe : </label>
          <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required>
        </div>

        <div class="">
          <label for="cpassword">Confirmer mot de passe : </label>
          <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez Mot de passe" required>
        </div>


        <input type="submit" name="formsend" id="formsend" value="S'inscrire">
        <p><?= $etat2 ?></p>
      </form>

    </section>
    <footer>
      <ul class="footer">
        <li>Copyright (c) 2019 Vinylooper</li>
        <li><a href="#">Nous contacter</a></li>
      </ul>
    </footer>
  </div>
</body>
