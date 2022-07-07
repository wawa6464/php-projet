<?php

namespace App\Etudiant;


$tabEtudiant = [];
// partie insertion



if(isset($_POST['optionEtudiant'])){

    require '../Dbconnect/Connexion.php';
    //require '../AnneeAcademique/TraitementAnneacademique.php';
    require '../AnneeAcademique/TraitementAnneacademique.php';
     $Nom = htmlentities(htmlspecialchars(trim($_POST['Nom'])));
    $Prenom= htmlentities(htmlspecialchars(trim($_POST['Prenom'])));
    $Sexe= htmlentities(htmlspecialchars(trim($_POST['Sexe'])));
    $Adresse = htmlentities(htmlspecialchars(trim($_POST['Adresse'])));
    $LieuNaissance = htmlentities(htmlspecialchars(trim($_POST['LieuNaissance'])));
    $DateNaissance = htmlentities(htmlspecialchars(trim($_POST['DateNaissance'])));
    $Telephone = htmlentities(htmlspecialchars(trim($_POST['Telephone'])));
    $Email = htmlentities(htmlspecialchars(trim($_POST['Email'])));
    $Filiere = htmlentities(htmlspecialchars(trim($_POST['Filiere'])));
    $Niveau = htmlentities(htmlspecialchars(trim($_POST['Niveau'])));
    $NIFCIN = htmlentities(htmlspecialchars(trim($_POST['NIFCIN'])));
    $PersonneReference = htmlentities(htmlspecialchars(trim($_POST['PersonneReference'])));
    $telpersonneref = htmlentities(htmlspecialchars(trim($_POST['telpersonneref'])));
    $AnneeAcademique = htmlentities(htmlspecialchars(trim($_POST['AnneeAcademique'])));
    $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    $Memo = htmlentities(htmlspecialchars(trim($_POST['Memo'])));
    $photo = htmlentities(htmlspecialchars(trim($_POST['photo'])));



    

      if(!empty($Nom)&&!empty($Prenom) && !empty($Sexe) &&!empty($Adresse) && !empty($LieuNaissance) &&!empty($DateNaissance) && !empty($Telephone)  && !empty($Email)
      && !empty($Niveau) &&!empty($Filiere) && !empty($NIFCIN) &&!empty($PersonneReference) && !empty($telpersonneref)  &&!empty($Etat) && !empty($Memo) &&!empty($photo)
      ){
        $query =$sdPDO->prepare("INSERT INTO etudiant(Nom,Prenom,Sexe,Adresse,LieuNaissance,DateNaissance,Telephone,Email,Filiere,Niveau,NIFCIN,PersonneReference,telpersonneref,AnneeAcademique,Etat,Memo,photo) 
        VALUES(:Nom,:Prenom,:Sexe,:Adresse,:LieuNaissance,:DateNaissance,:Telephone,:Email,:Filiere,:Niveau,:NIFCIN,:PersonneReference,:telpersonneref,:AnneeAcademique,:Etat,:Memo,:photo) ");
    
     
       $query->bindvalue(':Nom',$Nom);
        $query->bindvalue(':Prenom',$Prenom);
        $query->bindvalue(':Sexe',$Sexe);
        $query->bindvalue(':Adresse',$Adresse);
        $query->bindvalue(':LieuNaissance',$LieuNaissance);
        $query->bindvalue(':DateNaissance',$DateNaissance);
        $query->bindvalue(':Telephone',$Telephone);
        $query->bindvalue(':Email',$Email);
        $query->bindvalue(':Filiere',$Filiere);
        $query->bindvalue(':Niveau',$Niveau);
        $query->bindvalue(':NIFCIN',$NIFCIN);
        $query->bindvalue(':PersonneReference',$PersonneReference);
        $query->bindvalue(':telpersonneref',$telpersonneref);
        $query->bindvalue(':AnneeAcademique', $AnneeAcademique);
        $query->bindvalue(':Etat',$Etat);
        $query->bindvalue(':Memo',$Memo);
        $query->bindvalue(':photo',$photo);
      
        $resultat = $query->execute();
 
        if(!$resultat){
            echo "il y a un probleme ";
        }
        else{
            echo "Enregistrement effectue";
            require 'afficherEtudiant.php';
        }

}
   

        
}

//Partie affichage


 if(isset($_GET['Code'])){
    require '../Dbconnect/Connexion.php';
    $Code = htmlentities(htmlspecialchars($_GET['Code']));
    $query =$sdPDO->prepare("SELECT * FROM etudiant WHERE Code=:Code"); 
    $response=$query->execute([
        'Code'=>$Code,
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
if(isset($_POST['optionModifier'])){
   
    $Nom = htmlentities($_POST['Nom']);
    $Prenom = htmlentities($_POST['Prenom']);
     $Sexe = htmlentities(htmlspecialchars(trim($_POST['Sexe'])));
    $Adresse = $_POST['Adresse'];
    $LieuNaissance = $_POST['LieuNaissance'];
    $DateNaissance = htmlentities(htmlspecialchars(trim($_POST['DateNaissance'])));
    $Telephone = htmlentities(htmlspecialchars(trim($_POST['Telephone'])));
    $Email = htmlentities(htmlspecialchars(trim($_POST['Email'])));
    $Filiere = htmlentities(htmlspecialchars(trim($_POST['Filiere'])));
    $Niveau = htmlentities(htmlspecialchars(trim($_POST['Niveau'])));
    $NIFCIN = htmlentities(htmlspecialchars(trim($_POST['NIFCIN'])));
    $PersonneReference = htmlentities(htmlspecialchars(trim($_POST['PersonneReference'])));
    $telpersonneref = htmlentities(htmlspecialchars(trim($_POST['telpersonneref'])));
    $AnneeAcademique = htmlentities(htmlspecialchars(trim($_POST['AnneeAcademique'])));
    $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    $Memo = htmlentities(htmlspecialchars(trim($_POST['Memo'])));
    $photo = htmlentities(htmlspecialchars(trim($_POST['photo'])));
    $Code = htmlentities($_POST['Code']);
    

   


    $sql ="UPDATE  etudiant SET Code=:Code, Nom=:Nom,Prenom=:Prenom,Sexe=:Sexe,Adresse=:Adresse,LieuNaissance=:LieuNaissance,DateNaissance=:DateNaissance
    ,Telephone=:Telephone,Email=:Email,Filiere=:Filiere,Niveau=:Niveau,NIFCIN=:NIFCIN,PersonneReference=:PersonneReference,telpersonneref=:telpersonneref
    ,AnneeAcademique=:AnneeAcademique,Etat=:Etat,Memo=:Memo ,photo=:photo   WHERE Code=:Code ";
 
   $query = $sdPDO->prepare($sql);
    
    $query->bindvalue(':Nom',$Nom);
    $query->bindvalue(':Prenom',$Prenom);
    $query->bindvalue(':Sexe',$Sexe);
    $query->bindvalue(':Adresse',$Adresse);
    $query->bindvalue(':LieuNaissance',$LieuNaissance);
    $query->bindvalue(':DateNaissance',$DateNaissance);
    $query->bindvalue(':Telephone',$Telephone);
    $query->bindvalue(':Email',$Email);
    $query->bindvalue(':Filiere',$Filiere);
    $query->bindvalue(':Niveau',$Niveau);
    $query->bindvalue(':NIFCIN',$NIFCIN);
    $query->bindParam(':PersonneReference',$PersonneReference);
    $query->bindvalue(':telpersonneref',$telpersonneref);
    $query->bindvalue(':AnneeAcademique', $AnneeAcademique);
    $query->bindvalue(':Etat',$Etat);
    $query->bindvalue(':Memo',$Memo);
    $query->bindvalue(':photo',$photo);
    $query->bindvalue(':Code',$Code);


    $query->execute();
  
    echo "Data update";
    require 'afficherEtudiant.php';

}

 
 
 
 
