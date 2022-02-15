<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome');

if($nome){
    if(file_exists('nomes.txt')){
        file_put_contents('nomes.txt', $nome."<br/>", FILE_APPEND);
    }else{
        file_put_contents('nomes.txt', $nome."<br/>");  
    }
    header("Location: index.php");
}else{
    header("Location: index.php");
}
?>