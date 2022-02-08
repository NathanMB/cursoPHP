<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){
    echo "Olá, ".$nome.' - ';
}
?>

<a href="sair.php">Sair</a>