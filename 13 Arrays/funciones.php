<?php

/* 
 *Funciones de arrays
 */

//Ordenar
$cantantes = ['2pac','Drake Bell','Harry Styles','Alfredo'];
asort($cantantes); //Orden alfabetico
var_dump($cantantes);
echo '<br>';
echo '<br>';
arsort($cantantes); //Orden alfabetico inverso
var_dump($cantantes);
echo '<br>';
echo '<br>';
$numeros = [24,8,3,9,5,8];
sort($numeros); //Menor a mayor
var_dump($numeros);
echo '<br>';
echo '<br>';
echo '<hr>';

//A'adir elementos a un array
$cantantes[] = 'Avicii';
var_dump($cantantes);
echo '<br>';
echo '<br>';
array_push($cantantes,'Kiss');
var_dump($cantantes);
echo '<br>';
echo '<br>';
echo '<hr>';

//Eliminar elementos array
array_pop($cantantes);
var_dump($cantantes);
echo '<br>';
echo '<br>';
unset($cantantes[2]);
var_dump($cantantes);
echo '<hr>';

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo '<hr>';

//muestra en orden inverso al array original
var_dump(array_reverse($numeros));
echo '<hr>';

//Buscar en un array
$resultado = array_search('Alfredo',$cantantes);
var_dump($resultado);
echo '<br>';
echo $cantantes[$resultado];
echo '<hr>';

//Contar elementos
echo count($cantantes);
echo '<br>';
echo sizeof($cantantes);