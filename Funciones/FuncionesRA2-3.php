<?php 
// Código para obtener el factorial de un número
function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

// Le indico un numero a mano
$numero = 5;
// Calculamos el resultado
$resultado = obtieneFactorial($numero);
// Mostramos el resultado al usuario
echo "Factorial de $numero  = $resultado";

?>