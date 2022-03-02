<?php

require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.model.php");

if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
           echo "traiter le formulaire de connexion";   
        }
      
    }
}

if ($_SERVER['REQUEST_METHOD']=="GET") {
    if (isset($_REQUEST['action'])) {
        if (!is_connect()) {
            header('location:'.WEB_ROOT."?controller=securites&action=connexion");
            exit();
        }
        if ($_REQUEST['action']=="accueil") {
            
            if (is_admin()) {
               lister_joueur();
            }elseif (is_joueur()) {
                jeu();
            }
            
            require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");              
        }elseif($_REQUEST['action']=="liste.joueur") {
            lister_joueur();
        }
    }
}

function lister_joueur() {
    // Appel du Model
    ob_start();
        $data = find_users("ROLE_JOUEUR");
        require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."liste.joueur.html.php");   
    $content_for_views=ob_get_clean();  
    
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");              
    

}

// Fonction Jeu
function jeu() {
    ob_start();
        require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."jeux.html.php");   
    $content_for_views=ob_get_clean();  
    
    require_once(PATH_VIEWS."users".DIRECTORY_SEPARATOR."accueil.html.php");              
    
}