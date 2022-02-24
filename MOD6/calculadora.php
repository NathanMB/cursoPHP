<?php

class Calculadora{
    private float $numero = 0;

    public function add($x){
        $this->numero += $x;
    }

    public function sub($x){
        $this->numero -= $x;
    }

    public function multiply($x){
        $this->numero *= $x;
    }

    public function divide($x){
        $this->numero /= $x;
    }

    public function total(){
        return $this->numero;
    }

    public function clear(){
        return $this->numero = $this->numero=0;
    }
}

?>