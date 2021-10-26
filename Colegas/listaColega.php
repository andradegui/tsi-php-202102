<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['id'])) {

    echo 'Faça o login antes';
    exit();
}

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

echo '<form action="deletaColega.php" method="post">

    <table border="1">
        <tr>
            <th>ID</th> <th>Nome</th> <th>Ações</th>                         
        </tr>';

$stmt = $db->query('SELECT id, nome FROM colegas');  

while ($registro = $stmt->fetch(\PDO::FETCH_ASSOC)){

    echo "
        <tr>
            <td>{$registro['id']}</td> 
            <td>{$registro['nome']}</td> 
            <td>
                <button name='apagar' value='{$registro['id']}'>apagar</button>
                <button name='alterar' value='{$registro['id']}'>alterar</button>
            </td>
            
        </tr>";
}

echo '</table>
    <a href="formColega.html">Gravar Colega</>

    </form>';


