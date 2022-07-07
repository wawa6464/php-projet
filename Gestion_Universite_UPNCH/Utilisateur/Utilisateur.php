<?php
namespace App\Professeur;
class Utilisateur{
    private  $IdUtilisateur;
    private  $nom;
    private  $prenom;
    private  $poste;
    private  $pseudo;
    private  $motPas;
    private  $etat;
    private  $modulesAcces;

   

    public function __construct(String $IdUtilisateur, String $nom, String $prenom, String $poste, String $pseudo, String $motPas, String $etat, String $modulesAcces) {
        $this->IdUtilisateur = $IdUtilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->poste = $poste;
        $this->pseudo = $pseudo;
        $this->motPas = $motPas;
        $this->etat = $etat;
        $this->modulesAcces = $modulesAcces;
    }

    public function  getIdUtilisateur() {
        return $this->IdUtilisateur;
    }

    public function setIdUtilisateur(String $IdUtilisateur) {
        return $this; 
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom(String $nom) {
        return $this;
    }

    public function getPrenom() {
        return $this->prenom ;
    }

    public function setPrenom(String $prenom) {
       return $this; 
    }

    public function getPoste() {
        return $this->poste;
    }

    public function setPoste(String $poste) {
       return $this;  
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function setPseudo(String $pseudo) {
        return $this;
    }

    public function getMotPas() {
        return $this->motPas ;
    }

    public function setMotPas(String $motPas) {
        return $this;
    }

    public function  getEtat() {
        return  $this->etat ;
    }

    public function setEtat(String $etat) {
      return $this;
    }

    public function getModulesAcces() {
        return  $this->modulesAcces;
    }

    public function setModulesAcces(String $modulesAcces) {
        $this ;
    }
    
    

}