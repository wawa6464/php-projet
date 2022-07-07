<?php
namespace App\Notes;
class Notes  {
  
    private  $IdNote;
    private  $session;
    private  $IdEtudiant;
    private  $IdCours;
    private  $note;
    private  $anneeAcademique;

   
      function __construct (String $IdNote, String $session, String $IdEtudiant, String $IdCours, String $note, String $anneeAcademique) {
        $this->IdNote = $IdNote;
        $this->session = $session;
        $this->IdEtudiant = $IdEtudiant;
        $this->IdCours = $IdCours;
        $this->note = $note;
        $this->anneeAcademique = $anneeAcademique;
    }



    public function getIdNote() {
        return $this->IdNote;
    }

    public function setIdNote(String $IdNote) {
         return $this;
    }

    public function getSession() {
        return  $this->session;
    }

    public function setSession(String $session) {
        return $this;
    }

    public function getIdEtudiant() {
        return  $this->IdEtudiant;
    }

    public function setIdEtudiant(String $IdEtudiant) {
        return $this;
    }

    public function getIdCours() {
        return  $this->IdCours;
    }

    public function setIdCours(String $IdCours) {
       return $this;
    }

    public function getNote() {
        return  $this->note ;
    }

    public function setNote(String $note) {
       return $this;
    }

    public  function getAnneeAcademique() {
        return  $this->anneeAcademique ;
    }

    public  function setAnneeAcademique(String $anneeAcademique) {
        return $this;
    }
    
}