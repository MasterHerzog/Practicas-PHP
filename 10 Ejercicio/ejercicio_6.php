<?php

/* 
 * Mostrar una tabla de html con las tablas de multiplicar del 1 al 10
 */

echo "<table border='1px'<tr>"; //Inicio d ela tabla
    echo "<tr>";
        for($cabecera = 1;$cabecera <= 10;$cabecera++){
            echo "<td>Tabla del $cabecera</td>";
        }
    echo "</tr>";
    echo "<tr>";
        for($i = 1;$i <= 10;$i++){
            echo '<td>';
                for($j=1;$j<=10;$j++){
                    echo "$i X $j = ".($i*$j).'<br>';
                }
            echo '</td>';
        }
    echo "</tr>";
echo "</table>"; //Fin de la tabla