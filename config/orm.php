
<?php
///REcuperation des donnees du fichier
function json_to_array(string $key):array{
    $datajson = file_get_contents(PATH_DB);
    $data = json_decode($datajson,true);
    return $data[$key];
}

//Enregistrement et Mis à jour des donnees du fichier:
function array_to_json(string $key,array $data):string{
    $datajson = json_encode($json,true);
    return[$key];
}
 