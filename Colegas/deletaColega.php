<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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