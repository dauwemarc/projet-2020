<?php
//Manager
require_once('inscription.php');
class Manager{

  private $_nom;
  private $_email;
  private $_mdp;

//Inscription dans la bdd
    public function inscription($donnee){

    $bdd=new PDO('mysql:host=localhost;dbname=project2020;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT INTO project (nom, mail, mdp) VALUES(:nom, :email, :mdp)');
    $a = $req->execute(array('nom'=>$donnee->getNom(), 'email'=>$donnee->getEmail(), 'mdp'=>md5($donnee->getMdp())));
    if ($a ==true){
      header("location: index.html");
    }
    else{
      header("location: form_connexion.php");
    }

          }



  //Connexion
    public function login(user $login){
    $bdd = new PDO('mysql:host=localhost;dbname=project2020;charset=utf8', 'root', '');
    $req = $bdd->prepare('SELECT * from project where mail = ? AND mdp = ?');
    $req->execute(array($login->getEmail(), SHA1($login->getMdp())));
    $donnee = $req->fetch();
    var_dump($donnee);
    if ($donnee){
      setcookie('nom', $donnee['nom'], time() + (86400 * 30), "/"); // 86400 = 1 day
      header('location: indexco.html');
    }
    else{
      $_SESSION['erreur_login'] = "Nom ou mdp erroné";
      header('location: form_connexion.php');
    }
  }

}

 ?>
