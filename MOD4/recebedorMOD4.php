<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade');
$email = filter_input(INPUT_POST, 'email');

if($nome && $email && $idade){
    setcookie('nome', $nome, time() + (86400 * 30));
    echo "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Idade: ".$idade;
}else{
    $_SESSION['aviso'] = 'Preencha dos itens corretamente!';
    header("Location: index.php");
    exit;
}

?>