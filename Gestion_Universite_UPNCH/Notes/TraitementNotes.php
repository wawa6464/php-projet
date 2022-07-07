<?php

namespace App\Etudiant;


$tabNotes = [];
// partie insertion
if(isset($_POST['optionNote'])){
    require '../Dbconnect/Connexion.php';
    //require '../AnneeAcademique/TraitementAnneacademique.php';
   
    $Sessione= htmlentities(htmlspecialchars(trim($_POST['Sessione'])));
    $Code= htmlentities(htmlspecialchars(trim($_POST['Code'])));
    $CodeCours = htmlentities(htmlspecialchars(trim($_POST['CodeCours'])));
    $Note = htmlentities(htmlspecialchars(trim($_POST['Note'])));
    $AnneeAcademique = htmlentities(htmlspecialchars(trim($_POST['AnneeAcademique'])));
    


    

      if(!empty($Sessione) && !empty($Code) &&!empty($CodeCours) && !empty($Note) &&!empty($AnneeAcademique	))
      
      {
        $query =$sdPDO->prepare("INSERT INTO notes(Sessione,Code,CodeCours,Note,AnneeAcademique) 
        VALUES(:Sessione,:Code,:CodeCours,:Note,:AnneeAcademique)");
    
     
   
        $query->bindvalue(':Sessione',$Sessione);
        $query->bindvalue(':Code',$Code);
        $query->bindvalue(':CodeCours',$CodeCours);
        $query->bindvalue(':Note',$Note);
        $query->bindvalue(':AnneeAcademique',$AnneeAcademique);
       
        $resultat = $query->execute();
 
        if(!$resultat){
            echo "il y a un probleme ";
        }
        else{
            echo "Enregistrement effectue";
            require 'afficherNotes.php';
        }

}
   

        
}




if(isset($_GET['ID'])){
    require '../Dbconnect/Connexion.php';
    $ID = htmlentities(htmlspecialchars($_GET['ID']));
    $query =$sdPDO->prepare("SELECT * FROM notes WHERE ID=:ID"); 
    $response=$query->execute([
        'ID'=>$ID,
    ]);
    $data=$query->fetch();

    if($data){
       $user=$data;
    }
    else{
        $_SESSION["error"]="Utilisateur INTROUVABLE";
       // header('Location:tables.php'); 
    }
     

}



//Partie Modification
require '../Dbconnect/Connexion.php';

if(isset($_POST['updateNote'])){
  
    //require '../AnneeAcademique/TraitementAnneacademique.php';
    $ID= htmlentities(htmlspecialchars(trim($_POST['ID'])));
    $Sessione= htmlentities(htmlspecialchars(trim($_POST['Sessione'])));
    $Code= htmlentities(htmlspecialchars(trim($_POST['Code'])));
    $CodeCours = htmlentities(htmlspecialchars(trim($_POST['CodeCours'])));
    $Note = htmlentities(htmlspecialchars(trim($_POST['Note'])));
    $AnneeAcademique = htmlentities(htmlspecialchars(trim($_POST['AnneeAcademique'])));
    
        $sql = " UPDATE   notes SET ID=:ID,Sessione=:Sessione,Code=:Code,CodeCours=:CodeCours,Note=:Note,AnneeAcademique=:AnneeAcademique WHERE ID=:ID";
        $query = $sdPDO->prepare($sql);
        $query->bindvalue(':Sessione',$Sessione);
        $query->bindvalue(':Code',$Code);
        $query->bindvalue(':CodeCours',$CodeCours);
        $query->bindvalue(':Note',$Note);
        $query->bindvalue(':AnneeAcademique',$AnneeAcademique);
        $query->bindvalue(':ID',$ID);
        $query->execute();
 
      echo "succes";
      require 'afficherNotes.php';


   

        
}



 
 
 
 
