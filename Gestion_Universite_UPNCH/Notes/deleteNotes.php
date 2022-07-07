<?php
session_start();
// Partie suppression
if(isset($_GET['ID'])){
    require '../Dbconnect/Connexion.php';
    $ID = htmlentities(htmlspecialchars($_GET['ID']));

    $query =$sdPDO->prepare("SELECT COUNT(ID) AS count FROM notes WHERE ID=:ID"); 

    $response=$query->execute([
        'ID'=>$ID
    ]);
    
    $data=$query->fetch();
    
    if((int)$data['count'] >0){
        $query =$sdPDO->prepare("DELETE FROM notes WHERE ID=:ID"); 

        $response=$query->execute([
            'ID'=>$ID,
        ]);
        if($response){
            $_SESSION["success"]="Utilisateur SUPPRIMé";
            header('Location:afficherNotes.php');
        }
    }
    else{
        $_SESSION["error"]="Utilisateur INTROUVABLE";
        header('Location:afficherNotes.php');
    }
}