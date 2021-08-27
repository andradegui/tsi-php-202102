ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


<?php
//echo 'olá mundoo!';

$nome = 'Guilhermee';

echo 'Olá, ' . $nome . '!<br><br>';



echo "Olá,  $nome !";

if($nome == 'Guilheree')
    echo 'seu nome eh top';
else
    echo "seu nome eh zuado <br><br>";

echo '<br><br>';

for( $i = 0; $i < 10; $i++) {

    echo "Essa eh a linha $i<br>";

}