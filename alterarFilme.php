<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$novo_nome = 'MATRIX 4';

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$preparada = $db->prepare(' UPDATE 
                            dbfilme
                            SET nome = :nome 
                            WHERE idFilme = 1');

if($preparada) {
    $preparada->execute(['nome' => $novo_nome]);
        echo "FOIIII!!";
    
}
else {
   echo "ERRRO";
}