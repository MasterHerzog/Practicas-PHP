<?php

/* 
 * Escribir un programa que a;ada valores a un array mientras que su lpngitud
 * sea menor a 120 y mostrarlo por pantalla
 */

$coleccion = array();

for($i = 0; $i<120;$i++){
    array_push($coleccion, 'Elemento-'.$i.'<br>');
}

var_dump($coleccion);