<?php

    //Condicionales

    //Operadores de comparacion
    /*
    == igual
    === identico
    != distiont
    <> diferente
    !== no identico
    < menor que
    > mayor que
    >= menor igual que
    <= mayor igual que
    */

    //IF
    $color = 'verde';
    if($color == 'rojo'){
        echo 'El color es ROJO<br>';
    }else{
        echo 'El color NO es ROJO<br>';
    }
    echo '<hr>';
    $year = 2020;
    if($year != 2020){
        echo 'Es un a;o distinto a 2020<br>';
    }else{
       echo 'Es 2020<br>';
    }
    
    echo '<hr>';
    
    $dia = 1;
    //Else if
    if($dia == 1){
        echo 'Es lunes';
    }elseif($dia == 2){
        echo 'Es martes';
    }elseif($dia == 3){
        echo 'Es miercoles';
    }elseif($dia = 4){
        echo 'Es jueves';
    }elseif($dia == 5){
        echo 'Es viernes';
    }else{
        echo 'Es fin de semana';
    }
    
    
    //SWITCH
    $dia = 5;
    echo '<hr>';
    switch($dia){
        case 1:
            echo 'Es lunes';
            break;
        case 2:
            echo 'Es martes';
            break;
        case 3:
            echo 'Es miercoles';
            break;
        case 4:
            echo 'Es jueves';
            break;
        case 5:
            echo 'Es viernes';
            break;
        default:
            echo 'Es fin de semana';
    }
   
    // GOTO
    echo '<hr>';
    goto marca;
    echo '<h3>Instruccion 1</h3>';
    echo '<h3>Instruccion 2</h3>';
    echo '<h3>Instruccion 3</h3>';
    echo '<h3>Instruccion 4</h3>';
    
    marca:
        echo 'me he saltado 4 echos';

