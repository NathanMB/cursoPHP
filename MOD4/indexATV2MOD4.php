<?php

session_start();
require('header.php');

?>

<form method="POST" action="recebedor.php">
    </label>
        Novo nome:
        <br/>
        <input type="text" name="nome"/>
    </label>
    <input type="submit" value="Adicionar"/>
</form>

<h1>Lista de nomes</h1>

<?php

if(file_exists('nomes.txt')){
    $recNome = file_get_contents('nomes.txt');
    echo $recNome;
}

?>