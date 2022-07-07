<?php
require 'Professeur/Professeur.php';
require 'Professeur/enregistrerProfesseur.php';
class insertionprofesseur extends Connexion{
 
    public function save(){
    $query="insert into professeur (nom) values (:nom)";
    $req = $this->getBdd()->prepare($query);
    $req->bindValue(":nom", htmlspecialchars($_POST['nom'], PDO::PARAM_STR));
    $req->execute();
    }
}