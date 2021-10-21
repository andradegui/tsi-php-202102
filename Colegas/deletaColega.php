<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION['id'])) {

    echo 'Faça o login antes <br><br> <a href="login.html"></a>';
    exit;
}

$_POST['nome']  = $_POST['nome']    ?? '';

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare(' DELETE FROM
                        colegas
                       WHERE
                        id = :id');

$stmt->execute([':id' => $_POST['apagar']]);

header('Location: listaColega.php?apagado' . $sucess);

var_dump($_POST);