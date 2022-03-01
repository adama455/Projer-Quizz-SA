<?php
/**
 * Fonction qui vdetermine le champ Obligatoire
 */
function champ_obligatoire(string $key,string $data, array &$error,string $message="champs obligatoire" ){
    if (empty($data)) {
        $error[$key]=$message;
    }
}
/**
 * Fonction qui valide le Email
 */
function valid_email(string $key,string $data, array &$error,string $message="veillez saisir un email valide"){
    if (!filter_var($data,FILTER_VALIDATE_EMAIL)) {
        $error[$key]=$essage;
    }
}

/**
 * Fonction qui valide le Mot de Passe
 */
function valid_password(string $key, string $data, array &$error, string $message="Password Invalide"){
    if (condition) {

        $error[$key]=$essage;
    }
}
