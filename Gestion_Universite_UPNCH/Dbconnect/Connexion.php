<?php
  try{
      $sdPDO = new PDO('mysql:host=localhost;dbname=gestionuniversite','root',"");
      $sdPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $sdPDO->setAttribute(PDO::PARAM_STR,PDO::PARAM_INT);

     
    } 
    catch(Exception $ex){
      echo 'erreur de connexion'.$ex.getMessages();
    }
    

  


