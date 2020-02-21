<?php

//Traitement des données entrées dans le form de connexion
require 'inscription.php';
require 'manager.php';
session_start();

//Vérification du compte dans la bdd
$donnee = new User(['email'=>$_POST['email'],
                    'mdp'=>$_POST['mdp']]);

$login = new Manager;
$login->login($donnee);

?>
