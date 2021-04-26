<?php
/* Realizar una función que reciba un número y devuelva si es primo o no.*/

// Formulario para introducir un numero
echo "<form action=\"FuncionesRA2-3_5.php\" method=\"post\">";
// Con value igual a $_REQUEST["numero"] se guarda el numero que acabamos de enviar para volver a enviarlo
echo "<p>Numero: <input type=\"number\" name=\"numero\" value=".$_REQUEST["numero"]."></p>";
echo "<p><input type=\"submit\" value=\"Enviar\"></p>";
echo "</form>";

// Numero a comprobar si es primo o no
//$numero = 5;

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

// Mensaje para el usuario
if (isset($_REQUEST["numero"]) && $_REQUEST["numero"] != "" && $_REQUEST["numero"] != 0) {
    $numero = $_REQUEST["numero"];
    if (primo($numero)) {
        echo "<b>El numero " . $numero . " es primo.</b>";
    } else {
        echo "<b>El numero " . $numero . " no es primo.</b>";
    }
} else {
    echo "Inserte un numero";
}

?>