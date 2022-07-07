<?php
namespace App\AnneeAcademique;
use App\Db;

class AnneeAcademique {
    private  $AnneeDebut;
    private  $AnneeFin;
    private  $DateDebut;
    private  $DateFin;
    private  $Etat;
    private  $AnneeAcademique;

    

    public Function __construct (String $AnneeDebut, String $AnneeFin, String $DateDebut, String $DateFin, String $Etat, String $AnneeAcademique) {
        $this->AnneeDebut = $AnneeDebut;
        $this->AnneeFin = $AnneeFin;
        $this->DateDebut = $DateDebut;
        $this->DateFin = $DateFin;
        $this->Etat = $Etat;
        $this->AnneeAcademique = $AnneeAcademique;
       // parent::getInstance();
    }

    public function getAnneeDebut() {
        return $this->AnneeDebut;
    }

    public function setAnneeDebut(String $AnneeDebut) {
       return  $this;
    }

    public function getAnneeFin() {
        return $this->AnneeFin;
    }

    public function setAnneeFin(String $AnneeFin) {
        return $this;
    }

    public function getDateDebut() {
        return $this->DateDebut;
    }

    public function setDateDebut(String $DateDebut) {
        return $this;
    }

    public function getDateFin() {
        return  $this->DateFin;
    }

    public function setDateFin(String $DateFin) {
       return $this;
    }

    public function getEtat() {
        return $this->Etat;
    }

    public function setEtat(String $Etat) {
        return $this; 
    }

    public function getAnneeAcademique() {
        return  $this->AnneeAcademique;
    }

    public function setAnneeAcademique(String $AnneeAcademique) {
        return $this;
    }

    public function enregisterment(){
        require 'Db/Db.php';
        $this->getInstance();

        if(!empty($nom)&& !empty($prenom) && !empty($lieunaissance) && !empty($telephone)&& !empty($datenaissance)){

            $qury =  $_dsn->prepare("INSERT INTO anneeacademique(nom,prenom,lieunaissance,telephone,datenaissance) 
            VALUES(:nom,:prenom,:lieunaissance,:telephone,:datenaissance) ");
            $query->bindvalue(':nom',$nom);
            $query->bindvalue(':prenom',$prenom);
            $query->bindvalue(':lieunaissance',$lieunaissance);
            $query->bindvalue(':telephone',$datenaissance);
          
            $resultat = $qury->execute();

            if(!$resultat){
                echo "il y a un probleme ";
            }
            else{
                echo "Enregistrement effectue";
            }




        }
    }
    
    
}

