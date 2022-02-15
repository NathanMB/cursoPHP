<?php

$texto2 = 'Nathan';
$texto1 = file_get_contents('nome.txt');
$texto1 .= "\nMatos";
file_put_contents('nome.txt', $texto2);
echo $texto1;

//unlink("nomes.txt");
//rename('nome.txt', "nomes.txt");
//copy('nomes.txt', "pasta/nomes.txt");

?>

<form method="POST" action="recebedor.php" enctype="multipart/form-data">
    <input type="file" name="arquivo"/> 
    <input type="submit" value="Encaminhar"/>
</form>