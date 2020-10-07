<?php


class Routing
{

public function __construct()
{

}

     public function routing($controller, $action)
    {
        $result = (DEV_MODE != true) ? $url = URL .  $action :  $url = 'index.php?controller='. $controller  . '&action=' . $action;
        
        echo $result;
    }

   
}
 
?>
