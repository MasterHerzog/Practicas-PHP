<?php

/* 
 * Comprobar si una variable esta vacia y si esta vacia rellenarla con texto
 * en minusculas y mostrarlo en mayusculas
 */

$texto = '';

if(empty($texto)){
    $texto = 'Hola soy el relleno';
    $textoMayusculas = strtoupper($texto);
    echo "<strong>$textoMayusculas</strong>";
}else{
    echo 'La variable tiene este contenido: <br>'.$texto;
}
