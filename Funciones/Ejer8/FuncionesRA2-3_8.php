<?php
/* Crea un script que reciba por parámetro GET un valor límite y muestre los números primos entre 1 
y ese valor en una tabla de 5 columnas. Si no se especifica valor, por defecto se hará hasta 10. */

// Incluimos el archivo Funciones.php, para que haga uso de las funciones creadas ahí
include "../Funciones.php";

// Valor que obtenemos del usuario, en caso de insertarlo
$valor = $_GET['numero'];
// Valor a usar si el usuario no inserta ningun numero
$valorDefecto = 10;

if ($valor) {
    // Mostrar los primos hasta el valor introducido por el usuario
    $lista = arrayPrimos($valor);
} else {
    // En caso contrario mostrar los primos hasta el valor por defecto
    $lista = arrayPrimos($valorDefecto);
}
// Mostrar los primos en una tabla de 5 columnas
tabla($lista, 5);

?>