<?php

include 'banco/pdo.php';

include 'classes/Disciplina.class.php';

$objDisciplina = new Disciplina($bd);

include 'telas/header.php';

if(isset($_POST['apagar'])){

    $apagado = $objDisciplina->apagar($_POST['apagar']);
}

if(isset($_POST['criar'])){

    if (empty($_POST['id'])) {

        $criado = $objDisciplina->criar($_POST);
    }
}

if(isset($_POST['editar'])){

    $d = $objDisciplina->listar($_POST['editar']);

    $disciplina = $d[$_POST['editar']];

    include 'telas/cadastro.php';
    include 'telas/footer.php';
    exit();
}

if(isset($_POST['id'])){//Se existir o $_POST['id'] que vem do form de edição, faça

    if(is_numeric($_POST['id'])){//Verifique se é numérico

        //Salve a alteração
        $alterado = $objDisciplina->salvar($_POST);
    }
}

$lista = $objDisciplina->listar();

include 'telas/lista.php';

include 'telas/footer.php';