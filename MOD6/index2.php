<?php
require('header.php');

class Matematica{
    public static function somar($x, $y){
        return $x + $y;
    }
}

echo Matematica::somar(10, 20);

?>