<?php

/* 
 * Variables locales: variables declaradas dentro de la funcion y de uso exlusivo de la funcion
 * Variables globales: Variables que se declaran fuera e la funcion y se usan en otras partes del programa
 */

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";
$numero = 1;
echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1><br>";
    
    $year = 2019;
    echo $year;
}

//echo $year;
holaMundo();

echo "<hr>";

//Funciones variables
function buenosDias(){
    return "Hola buenos dias";
}

function buenasTaredes(){
    return "Hey que tal ha ido la comida?";
}

function buenasNoches(){
    return "Te vas a dormir ya?";
}

$horario = "buenasNoches";

echo $horario();
echo "<hr>";
//Funciones predefinidas de PHP
var_dump($horario);
echo "<br>";

//Fecha
echo date('d-m-y');
echo "<br>";
echo time(); //es el timestam del momento de ejecucion
echo "<br>";

//Funciones matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<br>";
echo "Numero pi: ".pi();
echo "<br>";
echo "Redondear: ".round(7.98987234,2);
echo "<br>";
echo '<hr>';
echo gettype($horario);
echo "<br>";
if(is_string($horario)){
    echo 'Es un String';
}else{
    echo 'Es otro tipo de dato';
}
echo "<br>";
if(is_int($numero)){
    echo 'La variable es un entero';
}else{
    echo 'La variable no es un entero';
}
echo "<br>";
//Isset nos dice si la variable existe en el programa
if(isset($edad)){
    echo 'La variable existe en el programa';
}else{
    echo 'La variable no existe en el programa';
}
echo "<br>";

$frase = "   mi contenido     ";
echo var_dump($frase);
echo "<br>";
echo var_dump(trim($frase));
echo "<br>";

//eliminar variables / indices
$year = 2020;
unset($year);
echo $year;
echo "<br>";

//Comprobar variable vacia
$texto = "";
if(empty($texto)){
    echo 'Tu variable esta vacia';
}else{
    echo 'Tu variable no esta vacia';
}

//Contar caracteres de un string
echo "<br>";
echo "<br>";
$cadena = '123456789';
echo strlen($cadena);
echo "<br>";
echo "<br>";

//Encontrar un string en dentro de una cadena
$frase = 'La vida es bella';
echo strpos($frase,'vida');
echo "<br>";
echo "<br>";
//remplazar contenido de un string

echo str_replace('vida','casa',$frase).'<br>';

//Convertir a mayusculas y minusculas
echo strtolower($frase).'<br>';
echo strtoupper($frase);