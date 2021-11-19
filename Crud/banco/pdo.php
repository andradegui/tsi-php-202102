<?php
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'ling_serv');
define('DB_USER', 'root');
define('DB_PASS', '');

$bd_dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
$bd_user = DB_USER;
$bd_pass = DB_PASS;

//Conectamos com o Banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);