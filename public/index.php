<?php
/**
 * Demarrage de la session:
 */
if (session_status()==PHP_SESSION_NONE) {
    session_start();
}

// Inclusion des constantes
require_once (dirname(dirname(__FILE__))."/config/constantes.php") ;

// Inclusion du orm
require_once (dirname(dirname(__FILE__))."/config/orm.php") ;

// Inclusion des roles
require_once (dirname(dirname(__FILE__))."/config/role.php") ;


// Inclusion des constantes
require_once (dirname(dirname(__FILE__))."/config/validator.php") ;

// Inclusion du routeur 
require_once (dirname(dirname(__FILE__))."/config/router.php") ;


