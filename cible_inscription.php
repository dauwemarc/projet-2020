<?php
require_once 'manager.php';
require_once 'inscription.php';

$inscription = new inscription($_POST["nom"], $_POST["email"], $_POST["mdp"]);
$donnee = new Manager();
$donnee->inscription($inscription);
?>
