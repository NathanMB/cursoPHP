<?php

echo "<pre>";
print_r($_FILES);

$permitidos = ['text/plain'];

if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $nome = md5(time().rand(0, 100).'.txt');
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'pasta/'.$nome);
    echo 'Arquivo permitido';
}else{
    echo 'Arquivo não permitido';
}

?>