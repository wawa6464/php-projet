<?php
session_start();
// Partie suppression
if(isset($_GET['Code'])){
    require '../Dbconnect/Connexion.php';
    $Code = htmlentities(htmlspecialchars($_GET['Code']));

    $query =$sdPDO->prepare("SELECT COUNT(Code) AS count FROM etudiant WHERE Code=:Code"); 

    $response=$query->execute([
        'Code'=>$Code
    ]);
    
    $data=$query->fetch();
    
    if((int)$data['count'] >0){
        $query =$sdPDO->prepare("DELETE FROM etudiant WHERE Code=:Code"); 

        $response=$query->execute([
            'Code'=>$Code,
        ]);
        if($response){
            $_SESSION["success"]="Utilisateur SUPPRIMé";
            header('Location:afficherEtudiant.php');
        }
    }
    else{
        $_SESSION["error"]="Utilisateur INTROUVABLE";
        header('Location:afficherEtudiant.php');
    }
}