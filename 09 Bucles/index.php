<?php

    //while
    $numero = 0;
    while($numero <= 100){
        echo $numero;
        if($numero != 100){
            echo ', ';
        }
        $numero++;
    }

    echo '<hr>';
    
    if(isset($_GET['numero'])){
        $numero = (int)$_GET['numero'];
    }else{
        $numero = 1;
    }
    
    echo 'Tabla de multiplicar del numeo '.$numero.': ';
    $i = 1;
    while($i <= 10){
        echo '<br>'.$numero*$i;
        $i++;
    }
    
    //Do while
    echo '<hr>';
    $edad = 18;
    $contador = 1;
    do{
        echo 'Tienes acceso al local privado '.$contador.'<br>';
        $contador++;
    }while($edad >= 18 && $contador <=10);
    
    //FOR
    echo '<hr>';
    $resultado = 0;
    for($i = 0;$i <= 100;$i++){
        $resultado += $i;
    }
    echo 'El resultado es: '.$resultado;