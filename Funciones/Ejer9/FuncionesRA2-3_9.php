<?php
/* Modifica el script anterior para que reciba también por GET otro parámetro para fijar 
el número de columnas. Si no se especifica, el número de columnas por defecto será 5.*/

// Incluimos el archivo Funciones.php, para que haga uso de las funciones creadas ahí
include "../Funciones.php";

// Comprobar si se ha insertado un valor para los primos
if (isset($_GET['numero'])) {
    // Valor que obtenemos del usuario, en caso de insertarlo
    $valor = $_GET['numero'];
} else {
    // En caso contrario mostrar los primos hasta el valor por defecto
    $valor = 10;
}

if (isset($_GET['columnas'])) {
    // Valor de las columnas que obtenemos del usuario, en caso de insertarlo
    $totalcolumnas = $_GET['columnas'];
} else {
    // Valor por defecto de las columnas, usado en caso de que el usuario no indique dicho valor
    $totalcolumnas = 5;
}

// Mostrar los primos hasta el valor introducido por el usuario
$lista = arrayPrimos($valor);
// Mostrar los primos en una tabla de 5 columnas
tabla($lista, $totalcolumnas);

// Para probarlo por ejemplo seria: http://localhost/DESER/Periodo_Recuperacion/Funciones/Ejer9/FuncionesRA2-3_9.php?numero=500&columnas=10
?>