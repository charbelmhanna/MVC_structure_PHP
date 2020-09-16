<?php

class Session
{

    public function __construct()
    {

    }

    public function sessionValidation($session)
    {
       
        

        $valid = (isset($_SESSION[$session]) && $_SESSION[$session] != NULL)? true :  false; 


        return $valid;

    }

     public function createSession($name, $message)
    {
       //VERIFY IF SESSION NAME EXIST
        if(isset($_SESSION[$name])){
            $result = 'Session exists !';
         }else{
              $result = $_SESSION[$name] = $message;
         }
   
        return $result;

    }
    
     public function refresh($name)
    {

        $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

        foreach ($_SESSION as $key => $value) {
           
            if($key == $name && isset($key))
            {
                if ($pageWasRefreshed) 
                {
                unset($_SESSION[$key]);
                }
            }
        }

    
    }

}
