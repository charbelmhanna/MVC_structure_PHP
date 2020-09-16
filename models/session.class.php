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

}
