<?php
/*
Hacer una UI con 2 inputs y 4 botones, uno para sumar, restar dividir y multiplicar
*/
$resultado = false;

if(isset($_POST['n1']) && isset($_POST['n2'])){

    if(isset($_POST['sumar'])){
        $resultado = 'El resultado es: '.($_POST['n1']+$_POST['n2']);
    }elseif(isset($_POST['restar'])){
        $resultado = 'El resultado es: '.($_POST['n1']-$_POST['n2']);
    }elseif(isset($_POST['multiplicar'])){
        $resultado = 'El resultado es: '.($_POST['n1']*$_POST['n2']);
    }elseif(isset($_POST['dividir'])){
        $resultado = 'El resultado es: '.($_POST['n1']/$_POST['n2']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="" method="POST">
        <p><label for="n1"></label></p>
        <p><input type="number" name="n1"></p>
        <p><label for="n2"></label></p>
        <p><input type="number" name="n2"></p>
        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">
    </form>
    <?php
        if($resultado != false):
            echo '<h2>'.$resultado.'</h2>';
        endif;
    ?>
</body>
</html>