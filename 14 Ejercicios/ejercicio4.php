<?php

/* 
 * Script con 4 variables (Array, string. int y bool) y que
 * imprima el tipo de variable que sea cada uno
 */

$matris = array('Hola mundo',88);
$titulo = 'Clase php';
$numero = 99;
$verdadero = true;
$contenedor = array($matris,$titulo,$numero,$verdadero);

foreach($contenedor as $index){
    echo gettype($index).'<br>';
}