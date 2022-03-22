<?php
require('header.php');
require('config.php');

$sql = $pdo->query("SELECT * FROM usuarios");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">Adiconar Usuário</a>
<table border="1" width="100">
    <tr>
        <th>ID
        <th>NOME
        <th>EMAIL
        <th>AÇÕES