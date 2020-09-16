<?php
include_once "views/helpers/globals.php";

$controller = "page";

$action = MAINPAGE;

if (isset($_GET['controller']) && isset($_GET['action'])) {

    $controller = $_GET['controller'];
    (DEV_MODE == true) ? $action = MAINPAGE : $action = $_GET['action'];

}

spl_autoload_register(function ($class) {
    require_once "models/$class.class.php";
});

$route = new Routing();

require_once "views/layout.php";

?>