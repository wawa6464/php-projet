<?php
session_start();
// Partie suppression
if(isset($_GET['Code'])){
    require '../Dbconnect/Connexion.php';
    $Code = htmlentities(htmlspecialchars($_GET['Code']));

    $query =$sdPDO->prepare("SELECT COUNT(Code) AS count FROM professeur WHERE Code=:Code"); 

    $response=$query->execute([
        'Code'=>$Code
    ]);
    
    $data=$query->fetch();
    
    if((int)$data['count'] >0){
        $query =$sdPDO->prepare("DELETE FROM professeur WHERE Code=:Code"); 

        $response=$query->execute([
            'Code'=>$Code,
        ]);
        if($response){
            $_SESSION["success"]="Utilisateur SUPPRIMé";
            echo "Suppession effectue";
            header('Location:afficherEtudiant.php');
        }
    }
    else{
        $_SESSION["error"]="Utilisateur INTROUVABLE";
        header('Location:afficherProfesseur.php');
    }
}