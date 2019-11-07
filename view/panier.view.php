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
        <li><a href="../controler/catMateriel.ctrl.php">Matériel</a></li> <!--Matériel-->
        <li><a href="../controler/panier.ctrl.php" id="panier">Panier</a></li> <!--Panier--> <!--<img src="../view/design/panier_image.png" alt="Panier" class="boutonsNav">-->
        <li><a href="../controler/register.ctrl.php">Se connecter</a></li> <!--Se connecter--> <!--<img src="../view/design/connexion_image.png" alt="Se connecter" class="boutonsNav">-->
      </ul>
    </nav>
  </header>

  <section>


    <form method="get" action="panier.ctrl.php">
      <table style="width: 400px">
        <tr>
          <td>Votre panier</td>
        </tr>
        <tr>
          <td>Libellé</td>
          <td>Quantité</td>
          <td>Prix Unitaire</td>
          <td>Action</td>
        </tr>
        <?php
        if($vide=="NULL"){
          ?>
          <tr>
            <td><?= $vide ?></td>
          </tr>
        <?php   }else{
          for ($i=0 ;$i < $nbArticles ; $i++)
          {
            ?>
            <tr>
              <td><?= $panier_libelles[$i] ?></td>
              <td><input type="number"  name="q" value=<?= $panier_quantites[$i] ?> max="100" </></td>
              <td><?= $panier_prix[$i] ?></td>
              <td><a href="panier.ctrl.php?action=suppression&l=<?= $panier_libelles[$i] ?>">X</a></td>
            </tr>
          <?php } ?>
          <tr>
            <td>Total de : <?= $prix_Total ?>€ TTC</td>
          </tr>
          <input type="submit" value="Rafraichir"/>
          <input type="hidden" name="action" value="refresh"/>
        <?php } ?>

      </table>
    </form>
  </section>
</body>
</html>
