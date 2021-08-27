<?php 

$despesas[1] = 345.55;
$despesas[2] = 135.00;
$despesas[3] = 600.00;
$despesas[4] = 900.00;
$despesas[5] = 400.00;

unset($despesas);

$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;


echo "<br><br>";

//foreach ($despesas as $indice => $valor) {

//}

foreach ($despesas as $nome => $gasto) {
    echo "$nome: R$" . number_format($gasto, 2, ',', '.') . "<br>";
}

echo "<br><br>";


$dias[0] = "Estudo PI";
$dias[1] = "Estudo CMS";
$dias[2] = "Estudo BD";
$dias[3] = "Estudo LS";
$dias[4] = "Estudo LSW";

unset($dias);

$dias['Segunda'] = "Estudo PI";
$dias['Terça'] = "Estudo CMS";
$dias['Quarta'] = "Estudo BD";
$dias['Quinta'] = "Estudo LS";
$dias['Sexta'] = "Estudo LSW";



foreach ($dias as $diasSemana => $atividades) {
    echo "$diasSemana - " . $atividades . "<br>";
}
