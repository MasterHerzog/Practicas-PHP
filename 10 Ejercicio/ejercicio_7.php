<?php

/* 
 * Mostrar todos los numeros impares entre 2 numeros de la url
 */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    for($i=$numero1+1;$i<$numero2;$i++){
        if($i%2 != 0){
            echo $i.'<br>';   
        }
    }
}else{
    echo '<h1>Introduce los valores por la url</h1>';
}