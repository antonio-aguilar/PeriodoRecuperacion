<?php
/* Modifica la función anterior para que, en lugar de imprimir los números, los devuelva en un array. */

// Incluimos el archivo Funciones.php, para que haga uso de una funcion ya creada ahí
include "../Funciones.php";

// Formulario para introducir un numero
echo "<form action=\"FuncionesRA2-3_7.php\" method=\"post\">";
// Con value igual a $_REQUEST["numero"] se guarda el numero que acabamos de enviar para volver a enviarlo
echo "<p>Numero: <input type=\"number\" name=\"numero\" value=".$_REQUEST["numero"]."></p>";
echo "<p><input type=\"submit\" value=\"Enviar\"></p>";
echo "</form>";

// Mensaje para el usuario
if (isset($_REQUEST["numero"]) && $_REQUEST["numero"] != "" && $_REQUEST["numero"] != 0) {
    $numero = $_REQUEST["numero"];
    $array = arrayPrimos($numero);
    print_r($array);
} else {
    echo "Inserte un numero";
}

?>