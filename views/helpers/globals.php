<?php 

$root = "";

if (file_exists("")) {
    define('ROOT', "views/");
}




define('DEV_MODE', false);
define('DOMAIN', '');
define('CORE', '');
define('ASSETS', $root . 'assets/');
define('URL', '');
define('PAGE', 'pages/');
define('COMPANY', '');


if (DEV_MODE == true) {
    define('PRODUCTION', false);
    define('MAINPAGE', 'homepage');
} else {
    define('PRODUCTION', true);
    define('MAINPAGE', 'homepage');

}


if(PRODUCTION){
    define('MYSQL_SERVER', '');
    define('MYSQL_USERNAME', '');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DATABASE', '');
}else{
    define('MYSQL_SERVER', 'localhost');
    define('MYSQL_USERNAME', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DATABASE', 'amslebanon');

}


/* SOCIAL MEDIA GLOBALS LINK */
define('FACEBOOK', '');
define('INSTAGRAM', '');
define('GOOGLE', '');
define('GITHUB', '');








?>