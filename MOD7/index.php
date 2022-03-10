<?php
require('header.php');
require('config.php');

$sql = $pdo->query('select * from usuarios');
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);