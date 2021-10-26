<?php

$db_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$db_user = 'root';
$db_pass = '';

$db = new PDO($db_dsn, $db_user, $db_pass);