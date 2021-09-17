<?php

echo "Sua disciplina favorita é " . $_POST['nmDisciplina'];

echo "<br><br>"; 

echo "o prof que da esta aula é " . $_POST['nmProfessor'];

echo "<br><br>"; 

echo "ela acontece no dia " . $_POST['dia'];

echo "<br><br>"; 

echo $_POST['desc'];

echo "<br><br>"; 

if( empty($_POST['nmDisciplina']) || empty($_POST['dia'])) {
    die('ERRO! os campos nome e dia são obrigatórios');
}

//abro o arquivo pra gravar mais coisas
$arquivo = fopen('bdmateria.csv', 'a');

//escrevo o arquivo
fwrite($arquivo,    $_POST['ç'] . ';' . 
                    $_POST['nmProfessor'] . ';' . 
                    $_POST['dia'] . ';' . 
                    $_POST['desc'] . "\r\n" );

fclose($arquivo);

echo "<br><br>";

echo "({$_POST['nmDisciplina']}  gravada com sucesso!)";