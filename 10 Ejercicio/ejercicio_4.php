<?php

/* 
 * Tomar 2 numeros por url (GET) y hacer las 4 operaciones basicas
 */

if(isset($_GET['numero1'])&&isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo 'Suma: '.($numero1+$numero2).'</br>';
    echo 'Resta: '.($numero1-$numero2).'</br>';
    echo 'Multiplicacion: '.($numero1*$numero2).'</br>';
    echo 'Division: '.($numero1/$numero2).'</br>';
}else{
    echo '<h1>Introduce los valores por la url</h1>';
}