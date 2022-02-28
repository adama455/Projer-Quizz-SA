<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
           echo "traiter le formulaire de connexion";   
        }
      
    }
}

if ($_SERVER['REQUEST_METHOD']=="GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action']=="connexion") {
            echo "charger la page de connexion";              
        }  
    }
}