<?php

/* 
 * Sesion: almacenar y persistir datos del usuario mientras que navega en un 
 * sitio hasta que cierra sesion o el navegador
 */

//Inisiar la sesion
session_start();

//Variable local
$variable_normal = 'Soy una cadena de texto';

//Variable de sesion
$_SESSION['variable_persistente'] = 'Hola Soy una sesion activa';

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];