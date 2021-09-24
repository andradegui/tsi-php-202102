<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';
$_POST['ano']  = $_POST['ano']    ?? '';

echo "<br><br>O seu filme gravado é " . $_POST['nome'];
echo "<br><br>o ano dele é  " . $_POST['ano'];

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('  INSERT dbfilme 
                        (nome, ano) 
                        VALUES
                        (:nome, :ano)');

$valores[':nome'] = $_POST['nome'];                        
$valores[':ano'] = $_POST['ano'];

if($stmt->execute($valores)) {
    echo "<br> Dados gravados com sucesso!";
}
else{
    echo "<br> Dados nao gravados com sucesso :/";
}

var_dump($db);





