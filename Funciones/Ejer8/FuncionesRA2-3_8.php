<?php
/* Crea un script que reciba por parámetro GET un valor límite y muestre los números primos entre 1 
y ese valor en una tabla de 5 columnas. Si no se especifica valor, por defecto se hará hasta 10. */

// Incluimos el archivo Funciones.php, para que haga uso de las funciones creadas ahí
include "../Funciones.php";

if (isset($_GET['numero'])) {
    // Valor que obtenemos del usuario, en caso de insertarlo
    $valor = $_GET['numero'];
} else {
    // En caso contrario mostrar los primos hasta el valor por defecto
    $valor =10;
}

// Mostrar los primos hasta el valor introducido por el usuario
$lista = arrayPrimos($valor);

// Mostrar los primos en una tabla de 5 columnas
tabla($lista, 5);

?>