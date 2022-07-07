<?php
session_start();
// Partie suppression
if(isset($_GET['IdUtilisateur'])){
    require '../Dbconnect/Connexion.php';
    $IdUtilisateur = htmlentities(htmlspecialchars($_GET['IdUtilisateur']));

    $query =$sdPDO->prepare("SELECT COUNT(IdUtilisateur) AS count FROM utilisateur WHERE IdUtilisateur=:IdUtilisateur"); 

    $response=$query->execute([
        'IdUtilisateur'=>$IdUtilisateur
    ]);
    
    $data=$query->fetch();
    
    if((int)$data['count'] >0){
        $query =$sdPDO->prepare("DELETE FROM utilisateur WHERE IdUtilisateur=:IdUtilisateur"); 

        $response=$query->execute([
            'IdUtilisateur'=>$IdUtilisateur,
        ]);
        if($response){
            $_SESSION["success"]="Utilisateur SUPPRIMé";
            echo "Suppession effectue";
            header('Location:afficherUtilisateur.php');
        }
    }
    else{
        $_SESSION["error"]="Utilisateur INTROUVABLE";
        header('Location:afficherUtilisateur.php');
    }
}