<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset='utf8'/>
        <title>Imprimir por pantalla - Master PHP</title>
    </head>
    <body>
        <h1>Master PHP</h1>
        
        <?='Bienvenido al curso de php'?>
        
        <?php
            // Titular de la seccion
            echo '<h3>Listado de videojuegos<h3>';
            
            /*
             * Esta es una lista de videojuegos
             */
            echo '<ul>'
                 .'<li>GTA</li>'
                 .'<li>ARK</li>'
                 .'<li>Call of duty</li>'
                 .'</ul>';
            
            //Parrafo explicativo
            echo '<p>Esta es toda'.' - '.'lista de juegos</p>';
        ?>
    </body>
</html>
<?php
    
?>

