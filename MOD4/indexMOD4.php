<?php
session_start();
require('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<form method="POST" action="recebedor.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome"/>
    </label>

    <br/>
    <br/>

    <label>
        Email:
        <br/>
        <input type="text" name="email"/>
    </label>

    <br/>
    <br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade"/>
    </label>

    <br/>
    <br/>

    <input type="submit" name="Enviar"/>
    
    <br/>
    <br/>

    <a href="apagar.php">Apagar Cookie</a>
</form>