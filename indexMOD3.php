<?php

require_once ('header.php');

function somar($numero1, $numero2, $numero3 = 0) {
    $total = $numero1 + $numero2 + $numero3;
    return $total;
}
echo $soma = somar(1, 1);

echo '<hr/>';

$dizimo = function (int $valor) {
    return $valor * 0.1;
};

echo $dizimo(80);

echo '<hr/>';

$dizimo2 = fn ($valor) => $valor * 0.1;
echo $dizimo2(80);

echo '<hr/>';

function dividir($valor) {
    $metade = $valor/2;
    echo $metade.'<br/>';
    if(round($metade) > 0){
        dividir($metade);
    }
}

echo $exemplo = dividir(100); 

echo '<hr/>';

echo date('d/m/Y H:i:s  z');

echo '<hr/>';

$data = date('Y/m/d');
if (setlocale(LC_TIME, 'pt')) {
    echo strftime("%A", strtotime($data));
}

?>