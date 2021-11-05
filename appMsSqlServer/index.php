<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
phpinfo();
exit();
*/

define('DB_HOST', 'localhost');
define('DB_PORT', '1433');//mudar
define('DB_NAME', 'pi');//mudar
define('DB_USER', 'tsi');//mjudar
define('DB_PASS', 'SistemaInternet123');//mudar

$bd_dsn = 'odbc:Driver={SQL Server};Server=' . DB_HOST . ';Port=' . DB_PORT . ';Database=' . DB_NAME;
$bd_user = DB_USER;
$bd_pass = DB_PASS;

//Conectamos com o Banco MySQL

try{

    $bd = new PDO($bd_dsn, $bd_user, $bd_pass);
} catch (Exception $e ){
    echo "<pre>";
    var_dump($e);
}

