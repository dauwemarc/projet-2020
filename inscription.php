<?php

class inscription {
  private $_nom;
  private $_email;
  private $_mdp;

  public function __construct($nom, $email, $mdp){

      $this->setNom($nom);
      $this->setEmail($email);
      $this->setMdp($mdp);
}
//Setter
public function setNom($nom){
  if(empty($nom)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_nom = $nom;
}
public function setEmail($email){
  if(empty($email)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_email = $email;
}
public function setMdp($mdp){
  if(empty($mdp)){
    trigger_error('la variable doit etre un caractere');
    return;
  }
  $this->_mdp = $mdp;
}
//getter
public function getNom(){
  return $this->_nom;
}
public function getEmail(){
  return $this->_email;
}
public function getMdp(){
  return $this->_mdp;
}
}
?>
