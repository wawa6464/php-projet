<?php
session_start();
// Partie suppression
if(isset($_GET['CodeCours'])){
    require '../Dbconnect/Connexion.php';
    $CodeCours = htmlentities(htmlspecialchars($_GET['CodeCours']));

    $query =$sdPDO->prepare("SELECT COUNT(CodeCours) AS count FROM cours WHERE CodeCours=:CodeCours"); 

    $response=$query->execute([
        'CodeCours'=>$CodeCours
    ]);
    
    $data=$query->fetch();
    
    if((int)$data['count'] >0){
        $query =$sdPDO->prepare("DELETE FROM cours WHERE CodeCours=:CodeCours"); 

        $response=$query->execute([
            'CodeCours'=>$CodeCours,
        ]);
        if($response){
            $_SESSION["success"]="Utilisateur SUPPRIMé";
            header('Location:afficherCours.php');
        }
    }
    else{
        $_SESSION["error"]="Utilisateur INTROUVABLE";
        header('Location:afficherCours.php');
    }
}