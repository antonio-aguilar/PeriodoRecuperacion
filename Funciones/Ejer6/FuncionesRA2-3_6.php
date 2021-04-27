<?php
/* Haz una función que reciba un parámetro llamado "limite" e imprima todos los números primos entre 1 y dicho límite.*/

// Incluimos el archivo Funciones.php, para que haga uso de una funcion ya creada ahí
include "../Funciones.php";

// Formulario para introducir un numero
echo "<form action=\"FuncionesRA2-3_6.php\" method=\"post\">";
// Con value igual a $_REQUEST["numero"] se guarda el numero que acabamos de enviar para volver a enviarlo
echo "<p>Numero: <input type=\"number\" name=\"numero\" value=".$_REQUEST["numero"]."></p>";
echo "<p><input type=\"submit\" value=\"Enviar\"></p>";
echo "</form>";

// Mensaje para el usuario
if (isset($_REQUEST["numero"]) && $_REQUEST["numero"] != "" && $_REQUEST["numero"] != 0) {
    $numero = $_REQUEST["numero"];
    imprimir($numero) ;
} else {
    echo "Inserte un numero";
}

?>