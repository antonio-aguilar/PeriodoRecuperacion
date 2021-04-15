<?php
// Dado un array, comprobar si hay elementos duplicados.
function duplicados($array)
{
    if (count($array) > count(array_unique($array))) {
        echo "En este array existen elementos repetidos!!";
    } else {
        echo "En este array no existen elementos repetidos!!";
    }
}

// Misma funcion distinta forma de hacerlo.
function hayRepetidos($array)
{

    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] == $array[$j]) {
                return true;
            }
        }
    }
    return false;
}

// Array sin duplicidad
$array = array("DWES", "DWEC", "DIW", "DAW", "HLC");
duplicados($array);?>
<br />
<?php
// Array con duplicidad
$array2 = array("color", "edad", "Sonido", "color", "edad", "Sonido");
duplicados($array2);?>

<br />
<?php
// Array sin duplicidad
$array3 = array("DWES", "DWEC", "DIW", "DAW", "HLC");
print_r($array3);
hayRepetidos($array);?>
<br />
<?php

$array4 = array("color", "edad", "Sonido", "color", "edad", "Sonido");
print_r($array4);

hayRepetidos($array2);


// Para cada lista, si tiene más de 5 elementos y hay elementos repetidos debe mostrar un aviso. Sino no hace nada.
$lista1 = [1,2,3,3];
$lista2 = [1,2,3,4,5,6,7,8,9];
$lista3 = [1,2,3,4,5,6,6,7,8];
echo "<br />";
if (count($lista1) > 5) {
  echo "Hay repetidos";
} else {

}
echo "<br />";
if (count($lista2) >= 5) {
  echo "Hay repetidos";
} else {
  
}
echo "<br />";
if (count($lista3) >= 5) {
  echo "Hay repetidos";
} else {
  
}

?>