<?php

//var_dump($_POST);

$_POST['email'] = $_POST['email'] ?? "Não informado";

$_POST['password'] = isset( $_POST['password']) ? $_POST['password'] : "Não informado";




echo "Seu email é " . $_POST['email'] . " e sua senha é " . $_POST['password'];

include('linkDisciplina.html');
