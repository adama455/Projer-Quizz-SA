
<?php
// var_dump($_REQUEST);
if (isset($_REQUEST['controllers'])) {
    switch ($REQUEST['controllers']){
        case 'securites':
            require_once(PATH_SRC."controllers/securites.controllers.php");
            break;
        
        case 'users':
            require_once(PATH_SRC."controllers/users.controllers.php");
            break;
    }
}else {
    require_once(PATH_SRC."controllers/securites.controllers.php");
}
