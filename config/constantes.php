<?php
/**
 * Chemin sur le dossier racine du projet:
 */
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER["SCRIPT_FILENAME"]));

/**
 * Chemin sur le dossier src qui contien les controllers et les modeles
 */
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

/**
 * Chemin sur les Templates du projet:
 */
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);

/**
 * Chemin qui nous mene vers le fichier json du projet:
 */
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

/**
 * Requett POST et GET:
 */
define("WEB_ROOT","http://localhost:8002/");
/**
 * Les cles d'erreur
 */
define("KEY_ERROR","error");
/**
 * Cles d'acces à l'utilisateur connecter
 */
define("KEY_USERS_CONNECT","users-connect");