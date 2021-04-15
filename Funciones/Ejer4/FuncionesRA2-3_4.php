<?php
/* Recibir un array y representarlo en una tabla. Añade parámetros para 
controlar el número de columnas. */

// Array
$lista = array(1,2,3,4,5,6,7,8,9,10);

// Funcion para recoger los datos del array y mostrarlo en una tabla
function tabla($lista, $totalColumnas) {
    $totalFilas = count($lista) / $totalColumnas;
    echo "<table border='1'>";
    for ($fila = 0; $fila < $totalFilas; $fila++) {
        echo "<tr>";
        for ($i=0;$i<$totalColumnas;$i++) {
            $posicion = $totalColumnas * $fila + $i;
            if ($posicion < count($lista)) {
                $contenido = $lista[$posicion];
            } else {
                $contenido = "";
            }
            echo "<td>".$contenido."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Llamadas a la funcion
tabla($lista, 5);
tabla($lista, 10);
