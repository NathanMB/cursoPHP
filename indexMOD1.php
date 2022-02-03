<?php 

    $numero = 10;
    $palavras = 'MIA JHONGA';
    $lola = '8====D'; 
    $boolean = true;
    $vazio = null;

    echo $size = '<br/>'.$palavras.' '.$lola;
    echo $size2 = "$palavras $lola";
    //echo $size .= "$numero $lola";

    $array1 = ['MIA','LOLA','TA','DURACA'];
    $array2 = ['SERIAUM', ...$array1,'POHA'];
    print_r($array2);

    $atributos = ['Forca' => 60, 'Agilidade' => 80, 'Destreza' => 50];
    $lista = ['Nome' => 'Bonieky', 'Idade' => 90, ...$atributos, 'Vida' => 1000, 'Mana' => 928];

    echo "<br/>NOME: ".$lista['Nome']."<br/>";
    echo "Atributos: ";
    //foreach($atributos as $atributo){
        // echo $atributo."<br/>";
    //}
    echo "VIDA: ".$lista['Vida']."<br/>";

    //for($i = 0; $i <= $array; $i++){
        //echo $array[$i];
    //}

?>