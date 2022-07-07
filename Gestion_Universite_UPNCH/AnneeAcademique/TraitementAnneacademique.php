<?php
namespace App\AnneeAcademique;
require 'AnneeAcademique.php';
//require 'Db\Db.php';
//$AnneeAcademique = new AnneeAcademique("","","","","","");
session_start();
$errors;


if(isset($_POST['option'])){
    require '../Dbconnect/Connexion.php';
    //session_start();
@$AnneeDebut = $_POST["AnneeDebut"];
// validation de la date
if(!filter_var($AnneeDebut)){
  $errors =" Format invalide";
}
// verifier si l'annee debut existe dans la bas
$query =$sdPDO->prepare("SELECT* FROM anneacademique WHERE AnneeDebut =?");
$query->execute([$AnneeDebut]);
$resultat = $query->rowCount();
if($resultat >0){
  $errors ="<span class='test-danger'> cette date existe deja dans la base.</span>";
}
/*
@$AnneeFin = $_POST["AnneeFin"];
@$DateDebut = $_POST["DateDebut"];
@$DateFin = $_POST["DateFin"];
@$AnneeAcademique = $_POST["AnneeAcademique"];
@$option = $_POST["option"];
*/

  $AnneeDebut = htmlentities(htmlspecialchars(trim($_POST['AnneeDebut'])));
   $AnneeFin = htmlentities(htmlspecialchars(trim($_POST['AnneeFin'])));
    $DateDebut  = htmlentities(htmlspecialchars(trim($_POST['DateDebut'])));
    $DateFin = htmlentities(htmlspecialchars(trim($_POST['DateFin'])));
    $Etat =  htmlentities(htmlspecialchars(trim($_POST['Etat'])));
    $AnneeAcademique = htmlentities(htmlspecialchars(trim($_POST['AnneeAcademique'])));
   
    $annF=$AnneeDebut;
   $annF++;
 $AnneeAcademique = $AnneeDebut ."-".$annF ;
 /*
if(empty($AnneeDebut)){
  $errors['AnneeDebut']="L'annee debut doit  saisir par l'utilisateur";
}
    if(!empty($AnneeDebut)&& !empty($annF)&& !empty($DateDebut) && !empty($DateFin) && !empty($Etat)&& !empty($AnneeAcademique)){

      $queryPrepare=$sdPDO->prepare("SELECT COUNT(AnneeAcademique) AS count FROM anneacademique WHERE AnneeDebut=:AnneeDebut"); 

      if($AnneeDebut==$AnneeDebut){
        $errors['AnneeDebut']="cette annee est dejas";

      }
      else{
         
        $response=$queryPrepare->execute([
          'AnneeDebut'=>$AnneeDebut
      ]);
      $mgs = "<span class='text-danger'> succes enregistrement effectue </span>";
      }

    
    
    $data=$queryPrepare->fetch();
    
    if((int)$data['count'] >0){
        $errors['AnneeDebut']="cette annee est deja";
    }

    */
if(empty($errors)){
  $query =$sdPDO->prepare("INSERT INTO anneacademique(AnneeDebut,AnneeFin,DateDebut,DateFin,Etat,AnneeAcademique) 
        VALUES(:AnneeDebut,:AnneeFin,:DateDebut,:DateFin,:Etat,:AnneeAcademique) ");
       
       $query->bindvalue(':AnneeDebut',$AnneeDebut);
        $query->bindvalue(':AnneeFin',$annF);
        $query->bindvalue(':DateDebut',$DateDebut);
        $query->bindvalue(':DateFin',$DateFin);
        $query->bindvalue(':Etat',$Etat);
        $query->bindvalue(':AnneeAcademique',$AnneeAcademique);
        require 'ouvertureAnneeAcademique.php';
        if($AnneeDebut=$AnneeDebut){

         // $errors['AnneeDebut']=" cette annee a ete choisie";
        }
        else{
          require 'deconnexion.php';
        }

        if($AnneeAcademique!==$AnneeAcademique){

          $errors['AnneeAcademique']=" l'utilsateur  doit choisir une une annee";
        }
        $resultat = $query->execute();
       

        if(!$resultat){
            echo "il y a un probleme ";
        }
        else{
            echo "Enregistrement effectue";
            require 'ouvertureAnneeAcademique.php';
        }

        $mgs = "<span class='text-danger'> succes enregistrement effectue </span>";

        function  AfficherAnneeAcademique(){
            require '../Dbconnect/Connexion.php';
            $sql ="SELECT* FROM anneacademique";
            return ExecuteSQL($sql);

        }
       
        require '../Dbconnect/Connexion.php';
        $sql ="SELECT* FROM anneacademique";
        $query=$sdPDO->prepare($sql);
        $query->fetchAll();
        $datas=  $query->fetchAll();
        
        foreach($datas as $data){
            if($Etat="Fermer"){
              require '../index.php';
            }
            else{
              
            }
         } 
   
 


}
else{
  require 'ouvertureAnneeAcademique.php';
}
}



