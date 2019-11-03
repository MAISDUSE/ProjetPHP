<?php
// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();
$config = parse_ini_file('../config/config.ini');

//$view->display("register.view.php");



?>
<form action="register.ctrl.php" method="post">
  <input type="text" name="nom" placeholder="Votre Nom" required><br>
  <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required><br>
  <input type="email" name="email" id="email" placeholder="Votre email" required><br>
  <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required><br>
  <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de passe" required><br>
  <input type="submit" name="formsend" id="formsend" value="S'inscrire">
</form>

<?php
if (isset($_POST['formsend'])) {
  extract($_POST);
  if(!empty($password) && !empty($cpassword) && !empty($email)){
    if($password==$cpassword){
      $hashpass = password_hash($password,PASSWORD_BCRYPT);

      //acces a la bd pour ouvoir push dees trucs dedans.
      //les requetes ne mazrchent pas.
      try {
        $db = new PDO("sqlite:../model/data/data.db");
      }
      catch (PDOException $e) {
        die("erreur de connexion : ".$e->getMessage());
      }
      $req = "SELECT email from Utilisateur WHERE email='$email'";
      $lignedb = $db->query($req);
      $lancement = $lignedb->fetchAll(PDO::FETCH_ASSOC);
      var_dump($lancement);

      if($result==0){
        $req = "INSERT INTO Utilisateur(nom,prenom,email,password) VALUES('$nom','$prenom','$email''$hasspass')";
        $lignedb = $db->query($req);
        echo"Le compte a été créé";
      }else{
        echo "Cet email est déja utilisé ! ";
      }




    }
  }
}



?>
