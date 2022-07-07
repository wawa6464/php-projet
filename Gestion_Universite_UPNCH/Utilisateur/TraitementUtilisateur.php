<?php
  namespace App\Utilisateur;


require '../Dbconnect/Connexion.php';
if(isset($_POST['optionUtilisateur'])){
 
  //require '../AnneeAcademique/TraitementAnneacademique.php';
    $Nom = htmlentities(htmlspecialchars(trim($_POST['Nom'])));
    $Prenom= htmlentities(htmlspecialchars(trim($_POST['Prenom'])));
    $Poste= htmlentities(htmlspecialchars(trim($_POST['Poste'])));
    $Pseudo = htmlentities(htmlspecialchars(trim($_POST['Pseudo'])));
    $MotDePasse = htmlentities(htmlspecialchars(trim($_POST['MotDePasse'])));
    $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    $ModulesDacces= htmlentities(htmlspecialchars(trim($_POST['ModulesDacces'])));
   


 
      if(!empty($Nom)&&!empty($Prenom) && !empty($Poste) &&!empty($Pseudo) &&  !empty($MotDePasse) && !empty($Etat)  && !empty($ModulesDacces) 
      ){
        $query =$sdPDO->prepare("INSERT INTO utilisateur(Nom,Prenom,Poste,Pseudo,MotDePasse,Etat,ModulesDacces) 
        VALUES(:Nom,:Prenom,:Poste,:Pseudo,:MotDePasse,:Etat,:ModulesDacces) ");
       
       $query->bindvalue(':Nom',$Nom);
        $query->bindvalue(':Prenom',$Prenom);
        $query->bindvalue(':Poste',$Poste);
        $query->bindvalue(':Pseudo',$Pseudo);
        $query->bindvalue(':MotDePasse',$MotDePasse);
       $query->bindvalue(':Etat',$Etat);
        $query->bindvalue(':ModulesDacces',$ModulesDacces);
       $resultat = $query->execute();

        if(!$resultat){
            echo "il y a un probleme ";
        }
        else{
            echo "Enregistrement effectue";
            require 'afficherUtilisateur.php';
        }
 

}

//Partie affichage

 
 $query =$sdPDO->query("SELECT* FROM utilisateur");

 $datas= $query->fetchAll();

 

 
 
}


if(isset($_GET['IdUtilisateur'])){
    require '../Dbconnect/Connexion.php';
    $Code = htmlentities(htmlspecialchars($_GET['IdUtilisateur']));
    $query =$sdPDO->prepare("SELECT * FROM professeur WHERE IdUtilisateur=:IdUtilisateur"); 
    $response=$query->execute([
        'IdUtilisateur'=>$IdUtilisateur,
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

  require '../Dbconnect/Connexion.php';
  if(isset($_POST['updateUtilisateur'])){
   
    //require '../AnneeAcademique/TraitementAnneacademique.php';
     $IdUtilisateur = htmlentities(htmlspecialchars(trim($_POST['IdUtilisateur'])));
      $Nom = htmlentities(htmlspecialchars(trim($_POST['Nom'])));
      $Prenom= htmlentities(htmlspecialchars(trim($_POST['Prenom'])));
      $Poste= htmlentities(htmlspecialchars(trim($_POST['Poste'])));
      $Pseudo = htmlentities(htmlspecialchars(trim($_POST['Pseudo'])));
      $MotDePasse = htmlentities(htmlspecialchars(trim($_POST['MotDePasse'])));
      $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
      $ModulesDacces= htmlentities(htmlspecialchars(trim($_POST['ModulesDacces'])));
     
        $sql= " UPDATE  utilisateur SET Nom=:Nom,Prenom=:Prenom,Poste=:Poste,Pseudo=:Pseudo,MotDePasse=:MotDePasse,Etat=:Etat,ModulesDacces=:ModulesDacces where IdUtilisateur=:IdUtilisateur";
   
         $query =$sdPDO->prepare($sql);
         $query->bindvalue(':Nom',$Nom);
          $query->bindvalue(':Prenom',$Prenom);
          $query->bindvalue(':Poste',$Poste);
          $query->bindvalue(':Pseudo',$Pseudo);
          $query->bindvalue(':MotDePasse',$MotDePasse);
         $query->bindvalue(':Etat',$Etat);
          $query->bindvalue(':ModulesDacces',$ModulesDacces);
          $query->bindvalue(':IdUtilisateur',$IdUtilisateur);
          $query->execute();
          if($query){
            echo "Succes";
            require 'afficherUtilisateur.php';
          }
          else{
            echo "echec";
          }
        
          
   
  
  
  }  
  
