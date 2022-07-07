<?php
    namespace App\Professeurs;
     Class Professeur{
        private  $code;
        private  $nom;
        private  $prenom;
        private  $sexe;
        private  $adresse;
        private  $tel;
        private  $statutMatrimonial;
        private  $lieuNaissance;
        private  $dateNaissance;
        private  $niveau;
        private   $filliereAffecte;
        private  $salaire;
        private  $poste;
        private  $email;
        private  $nifCin;
        private $etat;
        private  $memo; 
    
         public function __construct(String $code, String $nom, String $prenom, String $sexe, String $adresse, String $tel, String $statutMatrimonial, String $lieuNaissance, String $dateNaissance, String $niveau, String $coursEnseigner, String $filliereAffecte, String $salaire, String $poste, String $email, String $nifCin, String $etat, String $memo) {
        $this->code = $code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->adresse = $adresse;
        $this->tel = $tel;
        $this->statutMatrimonial = $statutMatrimonial;
        $this->lieuNaissance = $lieuNaissance;
        $this->dateNaissance = $dateNaissance;
        $this->niveau = $niveau;
        $this->coursEnseigner = $coursEnseigner;
        $this->filliereAffecte = $filliereAffecte;
        $this->salaire = $salaire;
        $this->poste = $poste;
        $this->email = $email;
        $this->nifCin = $nifCin;
        $this->etat = $etat;
        $this->memo = $memo;
     }
    
     public function getCode() {
         return $this->code;
     }
    
     public function setCode(String $code) {
       return $this;
     }
    
     public function getNom() {
         return $this->nom;
     }
    
     public function setNom(String $nom) {
        return $this;
     }
    
     public function getPrenom() {
         return  $this->prenom;
     }
    
     public function setPrenom(String $prenom) {
        return $this;
     }
    
     public function getSexe() {
         return $this->sexe;
     }
    
     public function setSexe(String $sexe) {
         return $this;
     }
    
     public function getAdresse() {
         return $this->adresse;
     }
    
     public function setAdresse(String $adresse) {
         return $this;
     }
    
     public function getTel() {
         return $this->tel;
     }
    
     public function setTel(String $tel) {
         return $this;
     }
    
     public function getStatutMatrimonial() {
         return $this->statutMatrimonial;
     }
    
     public function setStatutMatrimonial(String $tatutMatrimonial) {
        return $this;
     }
    
     public function getLieuNaissance() {
         return $this->lieuNaissance;
     }
    
     public function setLieuNaissance(String $lieuNaissance) {
        return $this;
     }
    
     public function getDateNaissance() {
         return $this->dateNaissance;
     }
    
     public function setDateNaissance(String $dateNaissance) {
         return $this;
     }
    
     public function getNiveau() {
         return $this->niveau;
     }
    
     public function setNiveau(String $niveau) {
         return $this;
     }
    
     public function getCoursEnseigner() {
         return  $this->coursEnseigner;
     }
    
     public function setCoursEnseigner(String $coursEnseigner) {
      return $this;
     }
    
     public function  getFilliereAffecte() {
         return  $this->filliereAffecte;
     }
    
     public function setFilliereAffecte(String $filliereAffecte) {
        return $this;
     }
    
     public function getSalaire() {
         return $this->salaire;
     }
    
     public function setSalaire(String $salaire) {
        return $this;
     }
    
     public function getPoste() {
         return $this->poste;
     }
    
     public function setPoste(String $poste) {
         return $this;
     }
    
     public function getEmail() {
         return $this->email ;
     }
    
     public function setEmail(String $email) {
        return $this;
     }
    
     public function getNifCin() {
         return $this->nifCin;
     }
    
     public function setNifCin(String $nifCin) {
         return $this;
     }
    
     public function getEtat() {
         return $this->etat;
     }
    
     public function setEtat(String $etat) {
         return $this;
     }
    
     public function getMemo() {
         return  $this->memo;
     }
    
     public function setMemo(String $memo) {
        return $this;
     }

     }
   


 