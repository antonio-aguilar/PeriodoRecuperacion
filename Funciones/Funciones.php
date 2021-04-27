<?php 
/* Funciones del RA 2 y 3 */

/* ------------------------------ Ejercicio 1 ------------------------------ */
/* Código para obtener el factorial de un número */
function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
?>

<?php
/* ------------------------------ Ejercicio 2 ------------------------------ */

/* Dado un array asociativo, imprimir en forma de lista de definiciones HTML la etiqueta y el valor. 
   Imprimir como resumen el número de elementos del array.*/

function listaDefiniciones($arrayAsociativo) {
    echo "<dl>";
    foreach ($arrayAsociativo as $modulo => $nombreModulo) {
       echo "<dt>" . $modulo . "</dt><dd>" . $nombreModulo . "</dd>";
    }
    echo "</dl>";
}
?>

<?php
/* ------------------------------ Ejercicio 3 ------------------------------ */

// Dado un array, comprobar si hay elementos duplicados.
function duplicados($array) {
    if (count($array) > count(array_unique($array))) {
        echo "En este array existen elementos repetidos!!";
    } else {
        echo "En este array no existen elementos repetidos!!";
    }
}

// Misma funcion distinta forma de hacerlo.
function hayRepetidos($array) {

    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] == $array[$j]) {
                return true;
            }
        }
    }
    return false;
}

?>

<?php
/* ------------------------------ Ejercicio 4 ------------------------------ */

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
?>

<?php
/* ------------------------------ Ejercicio 5 ------------------------------ */

/* Realizar una función que reciba un número y devuelva si es primo o no.*/

function primo($numero)
{
    // Total divisores
    $total = 0;

    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $total += 1;
        }
    }
    // si el total es mayor a 2 entonces no es primo de lo contrario si lo es
    if ($total > 2) {
        return false;
    } else {
        return true;
    }
}
?>

<?php
/* ------------------------------ Ejercicio 6 ------------------------------ */

/* Haz una función que reciba un parámetro llamado "limite" e imprima todos los números primos entre 1 y dicho límite.*/

// funcion para imprimir la lista de primos hasta el numero pasado por el formulario
function imprimir($numero)
{
    for ($i = 1; $i <= $numero; $i++) {
        if (primo($i)) {
            echo $i . " ";
        }
    }

}
?>

<?php
/* ------------------------------ Ejercicio 7 ------------------------------ */

/* Modifica la función anterior para que, en lugar de imprimir los números, los devuelva en un array. */

function arrayPrimos($numero)
{
    $array = array();
    for ($i = 1; $i <= $numero; $i++) {
        if (primo($i)) {
            $array[] = $i;
        }
    }
    return $array;
}
?>
