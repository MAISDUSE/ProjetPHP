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
        <li><a href="#">Matériel</a></li> <!--MatÃ©riel-->
        <li><a href="#">Assistance</a></li> <!--FAQ-->
        <li><a href="#" id="panier">Panier</a></li> <!--Panier--> <!--<img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav">-->
        <li><a href="../controler/register.ctrl.php">Se connecter</a></li> <!--Se connecter--> <!--<img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav">-->
      </ul>
    </nav>
  </header>
  <section>


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
    <h2>Connexion - Login</h2>
    <form method="post">
      <input type="email" name="lemail" id="lemail" placeholder="Votre email" required><br>
      <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required><br>
      <input type="submit" name="formlogin" id="formlogin" value="Se connecter">
    </form>
    <p><?= $etat ?></p>


    <h2>Inscription - Signin</h2>
    <form method="post">
      <input type="text" name="nom" placeholder="Votre Nom" required><br>
      <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required><br>
      <input type="email" name="semail" id="semail" placeholder="Votre email" required><br>
      <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required><br>
      <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de passe" required><br>
      <input type="submit" name="formsend" id="formsend" value="S'inscrire">
    </form>
    <p><?= $etat2 ?></p>
  </section>
  <footer>
    <ul class="footer">
      <li>Copyright (c) 2019 Vinylooper</li>
      <li><a href="#">Nous contacter</a></li>
    </ul>
  </footer>
</body>
