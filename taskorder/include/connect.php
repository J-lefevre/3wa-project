<?php

$dns = 'mysql:host=localhost;dbname=taskorder';
$login = 'root';
$password = '';

$pdo = new PDO($dns, $login, $password);

$pdo->exec('SET NAMES UTF8');

?>