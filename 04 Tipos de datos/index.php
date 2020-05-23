<?php

//    Tipos de datos
/*
 *Entero (int)
 *Flotante (float)
 *Cadenas (string)
 *Boleanos (bool)
 *vacio (null)
 * Areglos (Array)
 * Objetos (object) 
*/

$numero = 100;
echo gettype($numero).'</br>';

$flotante = 4.67;
echo gettype($flotante).'</br>';

$texto = 'Esto es un texto';
echo gettype($texto).'</br>';

$bool = true;
echo gettype($bool).'</br>';

$nule = null;
echo gettype($nula); //muestra un error solo ignoralo
?>
