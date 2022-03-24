<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');
$usuario = false;
if ($id) {
    $usuario = $usuarioDao->findById($id);
}
if ($usuario === false) {
    header('Location:index.php');
    exit;
}
?>
<h1>EDITAR USUARIO</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?= $usuario->getID(); ?>" />

    <label>
        NOME:<br />
        <input type="text" name="name" value="<?= $usuario->getNOME(); ?>" />
    </label></br></br>

    <label>
        EMAIL:<br />
        <input type="email" name="email" value="<?= $usuario->getEMAIL(); ?>" />
    </label></br></br>

    <input type="submit" value="SALVAR" />
</form>