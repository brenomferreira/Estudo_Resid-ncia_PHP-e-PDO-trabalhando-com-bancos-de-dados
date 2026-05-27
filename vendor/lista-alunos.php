<?php


require_once 'vendor/autoload.php';


$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);


$resultado = $pdo->query('SELECT * FROM students');

var_dump($resultado->fetchAll(PDO::FETCH_ASSOC));