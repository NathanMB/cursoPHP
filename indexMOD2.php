<?php

$idade = 7;
$nome = 'Nathan';
$sobrenome = 'Matos';
$tipo = 'Texto';

if($idade >= 18){
    echo 'Maior de idade';
}else{
    echo 'Menor de idade';
}

echo '<hr/>';

echo ($idade >= 18) ? '<br/>Maior de idade': '<br/>Menor de idade';
$nomeCompleto = $nome ?? 'Anonimo';
$nomeCompleto .= $sobrenome ?? ''; 
echo '<br/>'.$nomeCompleto;

echo '<hr/>';

switch($tipo){
    case 'Foto':
        echo 'Exibindo FOTO';
        break;
    case 'Texto':
        echo 'Exibindo TEXTO<br/>';
        break;
}

echo '<hr/>';

while($idade < 10){
    echo '<br/>'.$idade++;
}

echo '<hr/>';

for($i = 10; $i > 0; $i--){
    echo '<br/>'.$i;
}

echo '<hr/>';

$atributos = ['Forca', 'Agilidade', 'Destreza'];

echo '<h2>Atributos</h2>';

foreach( $atributos as $chave => $atributo ){
    echo ($chave + 1).') '.$atributo.'<br/>';
}

echo '<ul>';
foreach( $atributos as $chave => $atributo ){
    echo '<li>'.($chave + 1).'</li>';
}
echo '</ul>';

echo '<hr/>';

for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        echo '-';
    }
    echo '<br/>';
}

echo '<hr/>';

for($i = 0; $i < 20; $i++){
    for($j = 0; $j < $i; $j++){
        echo '-';
    }
    echo '<br/>';
}

?>