<?php

$controllers = array("page" => ["homepage", "error", "maintenance"]);


if (array_key_exists(
    $controller,
    $controllers
)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call("page", "error");
    }
} else {
    call("page", "error");
}

function call($controller, $action)
{
    require_once "controllers/" . $controller . "Controller.class.php";


    switch ($controller) {
        case 'page':
            
            $controller = new PageController();

            break;
    }

    $controller->{$action}();
}




?>