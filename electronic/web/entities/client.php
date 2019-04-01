<?php

class client
{
  private $date;
  private $email;
  private $numtel;
  private $nom;
  private $prenom;
  private $mdp;

  function __construct($nom,$prenom,$mdp,$email,$date,$numtel)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->date = $date;
    $this->numtel = $numtel;
    $this->mdp = $mdp;
  }
  function getemail (){ return $this->email;}
  function getnom (){return $this->nom;}
  function getmdp (){return $this->mdp;}
  function getprenom (){return $this->prenom;}
  function getnumtel (){return $this->numtel;}
  function getdate (){return $this->date;}




}
?>
