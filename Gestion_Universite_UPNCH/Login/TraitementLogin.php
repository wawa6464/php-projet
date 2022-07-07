<?php


  if(isset($_POST['optionLogin'])){
    require '../Dbconnect/Connexion.php';
     $Pseudo = htmlentities(htmlspecialchars(trim($_POST['Pseudo'])));
     $MotDePasse = htmlentities(htmlspecialchars(trim($_POST['MotDePasse'])));
     $Etat =htmlentities(htmlspecialchars(trim($_POST['MotDePasse'])));
    

     if(!empty($Pseudo) && !empty($MotDePasse)){
       
        $sql = "SELECT* FROM utilisateur WHERE  Pseudo=:Pseudo and MotDePasse=:MotDePasse ";
        $query= $sdPDO->prepare($sql);
        $query->bindParam(':Pseudo',$Pseudo,PDO::PARAM_STR);
        $query->bindParam(':MotDePasse',$MotDePasse,PDO::PARAM_STR);
        $query->execute();
        $resultat=$query->fetchAll(PDO::FETCH_OBJ);
        
        if($resultat and $Etat="Admin" ){
          
            require '../public/index.php';
       
           
        }
        else{
          //require '../index.php';
          echo " Erreur 509 pseudo/password incorrect !
           reconnecter SVP 

           
           la page d'erreur non disponible!
          ";
        }

     }
  }