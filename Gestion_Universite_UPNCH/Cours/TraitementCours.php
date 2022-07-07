<?php

//$tabEtudiant = [];

if(isset($_POST['optionCours'])){
    require '../Dbconnect/Connexion.php';
    //require 'enregistrerCours.php';
    $NomCours = htmlentities(htmlspecialchars(trim($_POST['NomCours'])));
    $Filliere= htmlentities(htmlspecialchars(trim($_POST['Filliere'])));
    $Niveau= htmlentities(htmlspecialchars(trim($_POST['Niveau'])));
    $Sessione = htmlentities(htmlspecialchars(trim($_POST['Sessione'])));
    $Coefficient = htmlentities(htmlspecialchars(trim($_POST['Coefficient'])));
    $ProfTitulaire = htmlentities(htmlspecialchars(trim($_POST['ProfTitulaire'])));
    $ProfSuppleant = htmlentities(htmlspecialchars(trim($_POST['ProfSuppleant'])));
    $Jours = htmlentities(htmlspecialchars(trim($_POST['Jours'])));
    $HeureDebut = htmlentities(htmlspecialchars(trim($_POST['HeureDebut'])));
    $HeureFin = htmlentities(htmlspecialchars(trim($_POST['HeureFin'])));
    $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    


    

      if(!empty($NomCours)&&!empty($Filliere) && !empty($Niveau) &&!empty($Sessione) && !empty($Coefficient) &&!empty($ProfTitulaire) && !empty($ProfSuppleant) &&!empty($Jours) && !empty($HeureDebut)
      && !empty($HeureFin) &&!empty($Etat) 
      ){
        $query =$sdPDO->prepare("INSERT INTO cours(NomCours,Filliere,Niveau,Sessione,Coefficient,ProfTitulaire,ProfSuppleant,Jours,HeureDebut,HeureFin,Etat)
        VALUES(:NomCours,:Filliere,:Niveau,:Sessione,:Coefficient,:ProfTitulaire,:ProfSuppleant,:Jours,:HeureDebut,:HeureFin,:Etat) ");
        $query->bindvalue(':NomCours',$NomCours);
        $query->bindvalue(':Filliere',$Filliere);
        $query->bindvalue(':Niveau',$Niveau);
        $query->bindvalue(':Sessione',$Sessione);
        $query->bindvalue(':Coefficient',$Coefficient);
        $query->bindvalue(':ProfTitulaire',$ProfTitulaire);
        $query->bindvalue(':ProfSuppleant',$ProfSuppleant);
        $query->bindvalue(':Jours',$Jours);
        $query->bindvalue(':HeureDebut',$HeureDebut);
        $query->bindvalue(':HeureFin',$HeureFin);
        $query->bindvalue(':Etat',$Etat);
         $resultat = $query->execute();
       if(!$resultat){
            echo "il y a un probleme ";
        }
        else{
           // echo "Enregistrement effectue";
            require 'afficherCours.php';
        }
    }
        
     
if(isset($_GET['CodeCours'])){
    require '../Dbconnect/Connexion.php';
    $CodeCours = htmlentities(htmlspecialchars($_GET['CodeCours']));
    $query =$sdPDO->prepare("SELECT * FROM cours WHERE CodeCours=:CodeCours"); 
    $response=$query->execute([
        'CodeCours'=>$CodeCours,
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
   
}


if(isset($_POST['updateCours'])){
    require '../Dbconnect/Connexion.php';
    //require 'enregistrerCours.php';
    $NomCours = htmlentities(htmlspecialchars(trim($_POST['NomCours'])));
    $Filliere= htmlentities(htmlspecialchars(trim($_POST['Filliere'])));
    $Niveau= htmlentities(htmlspecialchars(trim($_POST['Niveau'])));
    $Sessione = htmlentities(htmlspecialchars(trim($_POST['Sessione'])));
    $Coefficient = htmlentities(htmlspecialchars(trim($_POST['Coefficient'])));
    $ProfTitulaire = htmlentities(htmlspecialchars(trim($_POST['ProfTitulaire'])));
    $ProfSuppleant = htmlentities(htmlspecialchars(trim($_POST['ProfSuppleant'])));
    $Jours = htmlentities(htmlspecialchars(trim($_POST['Jours'])));
    $HeureDebut = htmlentities(htmlspecialchars(trim($_POST['HeureDebut'])));
    $HeureFin = htmlentities(htmlspecialchars(trim($_POST['HeureFin'])));
    $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    $CodeCours = htmlentities(htmlspecialchars(trim($_POST['CodeCours'])));
    


    

     
        $sql= "UPDATE  cours SET CodeCours=:CodeCours, NomCours=:NomCours,Filliere=:Filliere,Niveau=:Niveau,
        Sessione=:Sessione,Coefficient=:Coefficient,ProfTitulaire=:ProfTitulaire,ProfSuppleant=:ProfSuppleant
        ,Jours=:Jours,HeureDebut=:HeureDebut,HeureFin=:HeureFin,Etat=:Etat WHERE CodeCours=:CodeCours";
        $query = $sdPDO->prepare($sql);
        $query->bindvalue(':NomCours',$NomCours);
        $query->bindvalue(':Filliere',$Filliere);
        $query->bindvalue(':Niveau',$Niveau);
        $query->bindvalue(':Sessione',$Sessione);
        $query->bindvalue(':Coefficient',$Coefficient);
        $query->bindvalue(':ProfTitulaire',$ProfTitulaire);
        $query->bindvalue(':ProfSuppleant',$ProfSuppleant);
        $query->bindvalue(':Jours',$Jours);
        $query->bindvalue(':HeureDebut',$HeureDebut);
        $query->bindvalue(':HeureFin',$HeureFin);
        $query->bindvalue(':Etat',$Etat);
        $query->bindvalue(':CodeCours',$CodeCours);
        $query->execute();
         echo "mise a jours  effectue";
         require 'afficherCours.php';
        
    

}



        





