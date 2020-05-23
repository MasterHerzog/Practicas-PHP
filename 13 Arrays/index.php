<?php

/* 
 * Array
 */

$peliculas = array('Batman','Spiderman','The lord of rings');

var_dump($peliculas[1]);
echo '<br>';

$cantantes = ['2pac','Drake Bell','Harry Styles'];
$personas = array(
    'nombre' => 'Mauro',
    'apellido' => 'Duque'
);

var_dump($personas['apellido']);
echo '<br>';

echo $peliculas[1].'<br>';
echo $cantantes[1];

echo '<br>';

//Recorrer con for
echo'<h1>Listado de peliculas</h1>';
echo '<ul>';
    for($i = 0;$i<count($peliculas);$i++){
        echo '<li>'.$peliculas[$i].'</li>';
    }
echo '</ul>';
    
//Foreach
echo '<h1>Listado de cantantes</h1>';
echo '<ul>';
    foreach($cantantes as $cantante){
        echo '<li>'.$cantante.'</li>';
    }
echo '</ul>';

//Arrays multidimensionales
$contactos = array(
    array(
        'nombre' => 'Mauro',
        'email' => 'mauroduques01@gmail.com'
    ),
    array(
        'nombre' => 'Juan',
        'email' => 'perez@gmail.com'
    ),
    array(
        'nombre' => 'Felix',
        'email' => 'felix@gmail.com'
    )
);

var_dump($contactos);
echo '<br>';
echo $contactos[1]['nombre'];
echo '<br>';
foreach($contactos as $contacto){
    var_dump($contacto['nombre']);
}