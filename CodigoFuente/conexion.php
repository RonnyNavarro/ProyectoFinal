<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','bdllantas'); 
define('DB_USER','root'); 
define('DB_PASS','r00t'); 

$con = new mysqli (DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (!$con) {
    die('No pudo conectarse: ' . mysql_error());
}

?> 