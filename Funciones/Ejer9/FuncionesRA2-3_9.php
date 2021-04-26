<?php
/* Modifica el script anterior para que reciba también por GET otro parámetro para fijar 
el número de columnas. Si no se especifica, el número de columnas por defecto será 5.*/

// Incluimos el archivo Funciones.php, para que haga uso de las funciones creadas ahí
include "../Funciones.php";

// Valor que obtenemos del usuario, en caso de insertarlo
$valor = $_GET['numero'];
// Valor a usar si el usuario no inserta ningun numero
$valorDefecto = 10;
// Valor de las columnas que obtenemos del usuario, en caso de insertarlo
$columnas = $_GET['columnas'];
// Valor por defecto de las columnas, usado en caso de que el usuario no indique dicho valor
$columnasDefecto = 5;

if ($valor && $columnas) {
    // Mostrar los primos hasta el valor introducido por el usuario
    $lista = arrayPrimos($valor);
} else {
    // En caso contrario mostrar los primos hasta el valor por defecto
    $lista = arrayPrimos($valorDefecto);
}
// Mostrar los primos en una tabla de 5 columnas
tabla($lista, $columnas);

// Para probarlo por ejemplo seria: http://localhost/DESER/Periodo_Recuperacion/Funciones/Ejer9/FuncionesRA2-3_9.php?numero=500&columnas=10
?>
