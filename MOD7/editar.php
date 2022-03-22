<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {
}

?>

<form method="POST" action="editar_action.php">
    <label>
        Nome:<br />
        <input type="text" name="name">
    </label><br /><br />

    <label>
        Email:<br />
        <input type="text" name="email">
    </label><br /><br />

    <input type="submit" value="Salvar">
</form>