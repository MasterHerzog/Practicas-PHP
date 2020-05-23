<?php

/* 
 * Crear un array con el contenido de la tabla:
 * Accion    Aventura          Deportes
 * GTA       Assasins           FIFA20
 * COD       Crash              PES20
 * PUGB      Prince of persia   MOTO GP 19
 * 
 * Cada columna devbe ir en un fichero separado
 */

$tabla = array(
    'Accion' => array('GTA', 'COD', 'PUGB'),
    'Aventura' => array('Assasins', 'Crash', 'Prince of persia'),
    'Deportes' => array('FIFA20','PES20','MOTO GP 20')
);

$categorias = array_keys($tabla);


?>

<table border='1px'>
    <?php require_once 'encabezados.php'; ?>
    <?php require_once 'primeraFila.php'; ?>
    <?php require_once 'segundaFila.php'; ?>
    <?php require_once 'terceraFila.php'; ?>
    
</table>

