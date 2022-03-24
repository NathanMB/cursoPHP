<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>
<a href="adicionar.php">ADICIONAR USUARIO</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($lista as $usuario) : ?>
        <tr>
            <td><?= $usuario->getID(); ?></td>
            <td><?= $usuario->getNOME(); ?></td>
            <td><?= $usuario->getEMAIL(); ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario->getID(); ?>"> [ EDITAR ] </a>
                <a href="excluir.php?id=<?= $usuario->getID(); ?>" onclick="return confirm('Tem certeza que deseja excluir esse registro')"> [ EXCLUIR ] </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>