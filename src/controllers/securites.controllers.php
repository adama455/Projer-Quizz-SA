<?php

require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.model.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
          //Recuperation du login et Mot de passe
            $login=$_POST['login'];
            $password=$_POST['password'];
            //Appel de la fonction connexion 
            connexion($login,$password); 
        }
      
    }
} 

if ($_SERVER['REQUEST_METHOD']=="GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
           require_once(PATH_VIEWS."securites".DIRECTORY_SEPARATOR."connexion.html.php");   
        }
      
    }
}

/**
 * Fonction de Connexion
 */
function connexion(string $login, string $password):void{
    $error=[];
    champ_obligatoire('login',$loing,$error,"login obligatoire");
    if (count($error)==0) {
        valid_email('loing', $login,$error);
    }

    champ_obligatoire('password',$password,$error,"password obligatoire");
    if (count($error)==0) {
        //Appel de la fonction du modeles
        $users=find_user_login_password($login,$password);
        
        if (count($users)!=0) {
            //Utilisateur Exist
            $_SESSION[KEY_USERS_CONNECT]=$users;
            header('location:'.WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else {
            //Utilisateur n'Exist pas
            $error["connexion"]="Login ou Mot de passe Incorrect!";
            $_SESSION[KEY_ERROR]=$error;
            header('location:'.WEB_ROOT);
            exit();
        }
        
    // valid_password('password', $password,$error);
    }else{
        //Erreur de validation
        $_SESSION[KEY_ERROR]=$error;
        header('location:'.WEB_ROOT);
        exit();
    }    
}
