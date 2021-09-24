<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$sql = 'SELECT 
            nome, ano
        FROM 
            dbfilme';  
            
echo '<table border="1">

        <tr>
            <th>Nome</th> <th>Ano</th>            
        </tr>';

foreach ($db->query($sql) as $registro){
    echo "
        <tr>
            <td>{$registro['nome']}</td>
            <td>{$registro['ano']}</td>            
        </tr>
    ";
}

echo '</table>';