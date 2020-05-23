<?php

/* 
 * Funciones
 */

function muestraNombres(){
    echo '<h1>Mauro<br>Luis<br>Felix<br>Pablo</h1>';
}

muestraNombres();

//Ejemplo 2
function tabla($numero){
    echo 'Tabla de multiplicar del numero '.$numero.'<br>';
    for($i = 1;$i <= 10;$i++){
        echo "$numero X $i = ".($numero*$i).'<br>';
    }
}

echo '<hr>';

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo 'Ingresa tu numero por la url';
}

//Ejemplo 3
function calculadora($numero1,$numero2, $negrita = false){
    $cadena = '';
    if($negrita){
        $cadena .= '<h1>';
    }
    $cadena .=  '<hr>';
    $cadena .=  'Suma: '.($numero1+$numero2).'<br>';
    $cadena .=  'Resta: '.($numero1-$numero2).'<br>';
    $cadena .=  'Multiplicacion: '.($numero1*$numero2).'<br>';
    $cadena .=  'Division: '.($numero1/$numero2).'<br>';
    if($negrita){
        $cadena .=  '</h1>';
    }
    
    return $cadena;
}

echo calculadora(5, 7);
echo calculadora(10,12,true);

function devuelveNombre($nombre){
    return "<hr>El nombre es $nombre";
}

echo devuelveNombre("Mauro Duque Montemayor");