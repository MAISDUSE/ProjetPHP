<?php
session_start();//demare une session_start
//session_unset();//vide la session pour bouton deconection
//session_destroy(); //puis detruit la session.


// Inclus le mini framework
include('../framework/view.class.php');

$view = new View();
$config = parse_ini_file('../config/config.ini');
//acces a la bd pour pouvoir insert into les infos du nouvel utilisateur et verifié que son email n'est pas deja utilisé.
try {
  $db = new PDO("sqlite:../model/data/data.db");
}
catch (PDOException $e) {
  die("erreur de connexion : ".$e->getMessage());
}
if(isset($_SESSION['email']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])){
  if (isset($_POST['deconnexion'])) {
    session_unset();//vide la session pour bouton deconection
    session_destroy(); //puis detruit la session.
  }
}

if (isset($_POST['formlogin'])) {
  extract($_POST);
  if(!empty($lpassword) && !empty($lemail) ){
    $req = "SELECT * from Utilisateur WHERE email='$lemail'";
    $reponse = $db->query($req);
    $donnee = $reponse->fetch();
    if($donnee==true){
      //compte existe bien
      if(password_verify($lpassword,$donnee['password'])){
        $etat= "Le mot de passe est bon, connection en cours...";

        $_SESSION['email']=$donnee['email'];
        $_SESSION['nom']=$donnee['nom'];;
        $_SESSION['prenom']=$donnee['prenom'];;
      }else {
        $etat= "Mot de passe incorrect.";
      }

    }else{
      $etat="Le compte portant l'email ".$lemail." n'existe pas.";
    }

  }
}

if (isset($_POST['formsend'])) {
  extract($_POST);
  if(!empty($password) && !empty($cpassword) && !empty($semail) && !empty($nom) && !empty($prenom)){
    if($password==$cpassword){
      $hashpass = password_hash($password,PASSWORD_DEFAULT);


      $req = "SELECT email from Utilisateur WHERE email='$semail'";
      $reponse = $db->query($req);
      $donnee = $reponse->fetch();
      //var_dump($donnee);

      if($donnee==NULL){
        $req ="INSERT INTO Utilisateur(nom, prenom, email, password) VALUES(\"$nom\",\"$prenom\",\"$semail\",\"$hashpass\")";
        $db->query($req);
        $_SESSION['email']=$semail;
        $_SESSION['nom']=$nom;
        $_SESSION['prenom']=$prenom;
        $etat="Le compte a été créé";
      }else{
        $etat2= "Cet email est déja utilisé.";
      }




    }else {
      $etat2="Mot de passe différents.";
    }
  }
}
$view->assign("etat",$etat);
$view->assign("etat2",$etat2);
$view->display("register.view.php");
?>
