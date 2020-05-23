<?php
    
    //Operadores
    $numero1 = 55;
    $numero2 = 33;
    
    echo 'Suma: '.($numero1+$numero2).'<br>';
    echo 'Resta: '.($numero1-$numero2).'<br>';
    echo 'Multiplicacion: '.($numero1*$numero2).'<br>';
    echo 'Division: '.($numero1/$numero2).'<br>';
    echo 'Modulo: '.($numero1%$numero2).'<br>';
    
    //Operadores incremento y decremento
    $year = 2020;
    echo '<h1>'.$year.'</h1>';
    
    $year++;
    echo '<h1>'.$year.'</h1>';
    
    $year--;
    echo '<h1>'.$year.'</h1>';
    
    ++$year;
    echo '<h1>'.$year.'</h1>';
    
    --$year;
    echo '<h1>'.$year.'</h1>';
    
    //Operadores de asignacion
    
    $edad = 55;
    
    echo '<br>'.$edad;
    echo '<br>'.($edad+=5);
    