<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';

$_POST['prof']  = $_POST['prof']    ?? '';

$_POST['dia']   = $_POST['dia']     ?? '';

$_POST['desc']  = $_POST['descricao']    ?? '';

if( empty($_POST['nome']) || empty($_POST['dia'])) {
    die('<br><br>ERRO! os campos nome e dia são obrigatórios');
}

echo "<br><br>Sua disciplina favorita é " . $_POST['nome'];

echo "<br><br>o prof que da esta aula é " . $_POST['prof'];

echo "<br><br>ela acontece no dia " . $_POST['dia'];

echo "<br><br>" . $_POST['descricao']; 

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('  INSERT disciplina 
                        (nome, prof, dia, descricao) 
                        VALUES
                        (:nome, :prof, :dia, :descricao)');

$valores[':nome'] = $_POST['nome'];
$valores[':prof'] = $_POST['prof'];
$valores[':dia'] = $_POST['dia'];
$valores[':descricao'] = $_POST['descricao'];

if($stmt->execute($valores)) {
    echo "<br> Dados gravados com sucesso!";
}
else{
    echo "<br> Dados nao gravados com sucesso :/";
}


var_dump($db);

