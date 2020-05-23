<?php

/*
 * Para mostrar el valor de las cookies, hay que usar $_COOKIE, 
 * que es una variable super global y un array asociativo
*/

if(isset($_COOKIE['miCookie'])){
    echo '<h1>'.$_COOKIE['miCookie'].'</h1>';
}else{
    echo'<h1>No existe la cookie</h1>';
}

echo '<hr>';

if(isset($_COOKIE['oneYear'])){
    echo '<h1>'.$_COOKIE['oneYear'].'</h1>';
}else{
    echo'<h1>No existe la cookie</h1>';
}

echo '<br>';
?>

<p><a href='borrarCookie.php'>Borrar Cookies</a></p>
<p><a href='crearCookies.php'>Crear Cookies</a></p>