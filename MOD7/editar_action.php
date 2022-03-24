<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';
$usuarioDao = new UsuarioDAOMySQL($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    $usuario = new Usuario();
    $usuario->setID($id);
    $usuario->setNOME($name);
    $usuario->setEMAIL($email);
    $usuarioDao->update($usuario);

    header("Location: index.php");
    exit;
} else {
    header("Location: adicionar.php");
    exit;
}
