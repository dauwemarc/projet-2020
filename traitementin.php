<?php
//connexion à la bdd
  $bdd = new PDO('mysql:host=localhost; dbname=project2020', 'root', '');
  var_dump($_POST);
//insersion dans la bdd
  if(isset($_POST['email']) && ($_POST['mdp']) && ($_POST['nom'])){
    $mdp = $_POST['mdp'];
    $mdp = sha1($mdp);
    $req = $bdd->prepare('INSERT INTO project VALUES (:nom, :mdp, :mail)');
    $req->execute(array('nom'=>$_POST['nom'],
                        'mail'=>$_POST['email'],
                        'mdp'=>$mdp));
  }
 ?>
