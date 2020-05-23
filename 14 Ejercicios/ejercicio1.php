<?php

/* 
 Programa que tenga un array con 8 numeros enteros y que haga lo siguiente:
 * 1 - Recorrelo y mostrarlo
 * 2 - Ordenarlo y mostrarlo
 * 3 - Mostrar su longitud
 * 4 - Buscar un elemento
 */
function mostrarArreglo($personas){
    $resultado = '';

    $resultado .= '<ul>';
        foreach($personas as $persona){
            $resultado .= '<li>'.$persona['nombre'].' '.$persona['apellido'].'</li>';
        }
    $resultado .= '</ul>';

    return $resultado;
}

$personas = array(
    array(
        'nombre' => 'Mauro',
        'apellido' => 'Duque'
    ),
    array(
        'nombre' => 'Felix',
        'apellido' => 'Delgadillo'
    ),
    array(
        'nombre' => 'Pablo',
        'apellido' => 'Rodriguez'
    )
);

echo mostrarArreglo($personas);
echo '<hr>';
asort($personas);
echo mostrarArreglo($personas);
echo '<hr>';
echo sizeof($personas);
echo '<hr>';
$resultado = array_search('Mauro',$personas[0]);
var_dump($resultado);
echo '<br>';
echo $personas[0][$resultado];
    