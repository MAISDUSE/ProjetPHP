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


  <form method="post" action="panier.php">
  <table style="width: 400px">
  	<tr>
  		<td colspan="4">Votre panier</td>
  	</tr>
  	<tr>
  		<td>Libellé</td>
  		<td>Quantité</td>
  		<td>Prix Unitaire</td>
  		<td>Action</td>
  	</tr>

  </body>
