<?php

/*
Crear una sesion que aumente su valor en uno o disminuya en uno
en funcion de si el parametro get counter esta en uno o cero.
*/

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}else if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<p><a href="ejercicio1.php?counter=1">Aumentar valor</a></p>
<p><a href="ejercicio1.php?counter=0">Disminuir valor</a></p><br>
<p><a href="ejercicio1.alt.php">Pagina 2</a></p>