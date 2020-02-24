<?php
//Traitement des données entrées dans le form d'inscription
require_once 'manager.php';
require_once 'inscription.php';

//Inscription du compte dans la bdd
$inscription = new inscription($_POST["nom"], $_POST["email"], $_POST["mdp"]);
$donnee = new Manager();
$donnee->inscription($inscription);
?>
