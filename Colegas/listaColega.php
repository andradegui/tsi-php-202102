<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);

$sql = 'SELECT 
            nome, id
        FROM 
            colegas'; 
            
$_GET{'apagado'} = $_GET{'apagado'} ?? false;

if($_GET{'apagado'} == 1){
    echo "<font colors='green'>Apagado com sucesso!</font><br>";
}

$_GET{'gravado'} = $_GET{'gravado'} ?? false;


if($_GET{'gravado'} == 1){
    echo "<font colors='green'>Gravado com sucesso!</font><br>";
}



            
echo '<form action="deletaColega.php" method="post">


    <table border="1">

        <tr>
            <th>Nome</th>  <th>Apagar</th> <th>Alterar Nome (Escreva)</th> <th>Alterar</th>                       
        </tr>';

foreach ($db->query($sql) as $registro){
    echo "
        <tr>
            <td>{$registro['nome']}</td> 
            <td><button name='apagar' value='{$registro['id']}'>apagar</button></td>
            <td><input name='alterarNome' id='alterarNome'></input></td>
            <td><button name='updateNome' id='updateNome' value='{$registro['id']}'>alterar</button></td>                  
        </tr>";
}

echo '</table>
    <a href="formColega.html">Gravar Colega</>

    </form>';




