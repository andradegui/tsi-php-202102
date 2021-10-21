<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION['id'])) {

echo 'Faça o login antes';
exit();
}

session_destroy();

header('Location: login.html');