<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';

echo "<br><br>O seu amigo gravado é " . $_POST['nome'];

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('  INSERT colegas 
                        (nome) 
                        VALUES
                        (:nome)');

$valores[':nome'] = $_POST['nome'];                        

if($stmt->execute($valores)) {
    echo "<br> Dados gravados com sucesso!";
}
else{
    echo "<br> Dados nao gravados com sucesso :/";
}