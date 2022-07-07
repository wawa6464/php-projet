<?php
  namespace App\Professeurs;

$tabProfesseur = [];

if(isset($_POST['optionProfesseur'])){
  require '../Dbconnect/Connexion.php';
  require '../AnneeAcademique/TraitementAnneacademique.php';
    $Nom = htmlentities(htmlspecialchars(trim($_POST['Nom'])));
    $Prenom= htmlentities(htmlspecialchars(trim($_POST['Prenom'])));
    $Sexe= htmlentities(htmlspecialchars(trim($_POST['Sexe'])));
    $Adresse = htmlentities(htmlspecialchars(trim($_POST['Adresse'])));
    $Telephone = htmlentities(htmlspecialchars(trim($_POST['Telephone'])));
    $matrimonial = htmlentities(htmlspecialchars(trim($_POST['matrimonial'])));
    $LieuNaissance = htmlentities(htmlspecialchars(trim($_POST['LieuNaissance'])));
    $DateNaissance= htmlentities(htmlspecialchars(trim($_POST['DateNaissance'])));
    $Niveau = htmlentities(htmlspecialchars(trim($_POST['Niveau'])));
    $CoursEnsegner = htmlentities(htmlspecialchars(trim($_POST['CoursEnsegner']))); 
    $FilliereAffecte  = htmlentities(htmlspecialchars(trim($_POST['FilliereAffecte']))); 
    $Salaire = htmlentities(htmlspecialchars(trim($_POST['Salaire']))); 
    $Poste = htmlentities(htmlspecialchars(trim($_POST['Poste']))); 
    $Email = htmlentities(htmlspecialchars(trim($_POST['Email']))); 
    $NIFCIN = htmlentities(htmlspecialchars(trim($_POST['NIFCIN'])));
    $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    $Memo = htmlentities(htmlspecialchars(trim($_POST['Memo'])));


 
      if(!empty($Nom)&&!empty($Prenom) && !empty($Sexe) &&!empty($Adresse) &&  !empty($Telephone) && !empty($matrimonial)  && !empty($LieuNaissance) &&!empty($DateNaissance)  
      && !empty($Niveau) && !empty($CoursEnsegner) && !empty($FilliereAffecte) &&! empty($Salaire) &&!empty($Poste) && !empty($Email) && !empty($NIFCIN) &&!empty($Etat) && !empty($Memo)
      ){
        $query =$sdPDO->prepare("INSERT INTO professeur(Nom,Prenom,Sexe,Adresse,Telephone,matrimonial,LieuNaissance,DateNaissance,Niveau,CoursEnsegner,FilliereAffecte,Salaire,Poste,Email,NIFCIN,Etat,Memo) 
        VALUES(:Nom,:Prenom,:Sexe,:Adresse,:Telephone,:matrimonial,:LieuNaissance,:DateNaissance,:Niveau,:CoursEnsegner,:FilliereAffecte,:Salaire,:Poste,:Email,:NIFCIN,:Etat,:Memo) ");
       
       $query->bindvalue(':Nom',$Nom);
        $query->bindvalue(':Prenom',$Prenom);
        $query->bindvalue(':Sexe',$Sexe);
        $query->bindvalue(':Adresse',$Adresse);
       $query->bindvalue(':Telephone',$Telephone);
        $query->bindvalue(':matrimonial',$matrimonial);
        $query->bindvalue(':LieuNaissance',$LieuNaissance);
        $query->bindvalue(':DateNaissance',$DateNaissance);
        $query->bindvalue(':Niveau',$Niveau);
        $query->bindvalue(':CoursEnsegner',$CoursEnsegner);
        $query->bindvalue(':FilliereAffecte',$FilliereAffecte);
        $query->bindvalue(':Salaire',$Salaire);
        $query->bindvalue(':Poste',$Poste);
        $query->bindvalue(':Email',$Email);
         $query->bindvalue(':NIFCIN',$NIFCIN);
        $query->bindvalue(':Etat',$Etat);
        $query->bindvalue(':Memo',$Memo);
   

    
        $resultat = $query->execute();

        if(!$resultat){
            echo "il y a un probleme ";
        }
        else{
            echo "Enregistrement effectue";
            require 'afficherProfesseur.php';
        }
 

}

//Partie affichage
require '../Dbconnect/Connexion.php';
 
 $query =$sdPDO->query("SELECT* FROM professeur");

 $datas= $query->fetchAll();

 

 require '../Dbconnect/Connexion.php';
 
}



if(isset($_GET['Code'])){
  require '../Dbconnect/Connexion.php';
  $Code = htmlentities(htmlspecialchars($_GET['Code']));
  $query =$sdPDO->prepare("SELECT * FROM professeur WHERE Code=:Code"); 
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



if(isset($_POST['updateprof'])){
 

  require '../Dbconnect/Connexion.php';

  $Nom = htmlentities(htmlspecialchars(trim($_POST['Nom'])));
  $Prenom= htmlentities(htmlspecialchars(trim($_POST['Prenom'])));
  $Sexe= htmlentities(htmlspecialchars(trim($_POST['Sexe'])));
  $Adresse = htmlentities(htmlspecialchars(trim($_POST['Adresse'])));
  $Telephone = htmlentities(htmlspecialchars(trim($_POST['Telephone'])));
  $matrimonial = htmlentities(htmlspecialchars(trim($_POST['matrimonial'])));
  $LieuNaissance = htmlentities(htmlspecialchars(trim($_POST['LieuNaissance'])));
  $DateNaissance= htmlentities(htmlspecialchars(trim($_POST['DateNaissance'])));
  $Niveau = htmlentities(htmlspecialchars(trim($_POST['Niveau'])));
  $CoursEnsegner = htmlentities(htmlspecialchars(trim($_POST['CoursEnsegner']))); 
  $FilliereAffecte  = htmlentities(htmlspecialchars(trim($_POST['FilliereAffecte']))); 
  $Salaire = htmlentities(htmlspecialchars(trim($_POST['Salaire']))); 
  $Poste = htmlentities(htmlspecialchars(trim($_POST['Poste']))); 
  $Email = htmlentities(htmlspecialchars(trim($_POST['Email']))); 
  $NIFCIN = htmlentities(htmlspecialchars(trim($_POST['NIFCIN'])));
  $Etat = htmlentities(htmlspecialchars(trim($_POST['Etat'])));
  $Memo = htmlentities(htmlspecialchars(trim($_POST['Memo'])));
  $Code = htmlentities(htmlspecialchars(trim($_POST['Code'])));



    if(!empty($Nom)&&!empty($Prenom) && !empty($Sexe) &&!empty($Adresse) &&  !empty($Telephone) && !empty($matrimonial)  && !empty($LieuNaissance) &&!empty($DateNaissance)  
    && !empty($Niveau) && !empty($CoursEnsegner) && !empty($FilliereAffecte) &&! empty($Salaire) &&!empty($Poste) && !empty($Email) && !empty($NIFCIN) &&!empty($Etat) && !empty($Memo)
    ){
      $sql =" UPDATE professeur SET Code=:Code, Nom=:Nom,Prenom=:Prenom,Sexe=:Sexe,Adresse=:Adresse,Telephone=:Telephone,matrimonial=:matrimonial
      ,LieuNaissance=:LieuNaissance,DateNaissance=:DateNaissance,Niveau=:Niveau,CoursEnsegner=:CoursEnsegner,FilliereAffecte=:FilliereAffecte,Salaire=:Salaire
      ,Poste=:Poste,Email=:Email,NIFCIN=:NIFCIN,Etat=:Etat,Memo=:Memo  WHERE  Code=:Code" ;

     $query = $sdPDO->prepare($sql);
   
     $query->bindvalue(':Nom',$Nom);
      $query->bindvalue(':Prenom',$Prenom);
      $query->bindvalue(':Sexe',$Sexe);
      $query->bindvalue(':Adresse',$Adresse);
     $query->bindvalue(':Telephone',$Telephone);
      $query->bindvalue(':matrimonial',$matrimonial);
      $query->bindvalue(':LieuNaissance',$LieuNaissance);
      $query->bindvalue(':DateNaissance',$DateNaissance);
      $query->bindvalue(':Niveau',$Niveau);
      $query->bindvalue(':CoursEnsegner',$CoursEnsegner);
      $query->bindvalue(':FilliereAffecte',$FilliereAffecte);
      $query->bindvalue(':Salaire',$Salaire);
      $query->bindvalue(':Poste',$Poste);
      $query->bindvalue(':Email',$Email);
       $query->bindvalue(':NIFCIN',$NIFCIN);
      $query->bindvalue(':Etat',$Etat);
      $query->bindvalue(':Memo',$Memo);
      $query->bindvalue(':Code',$Code);
      $query->execute();
      echo "mise a jour effectue";
      require 'afficherProfesseur.php';

     


}

}

