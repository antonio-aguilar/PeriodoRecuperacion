<?php
/* Dado un array, comprobar si hay elementos duplicados. */

function duplicados($array) {
   if(count($array) > count(array_unique($array))){
      echo "En este array existen elementos repetidos!!";
    }else{
      echo "En este array no existen elementos repetidos!!";
    }
}

// Array sin duplicidad
$array = array("DWES", "DWEC", "DIW", "DAW", "HLC");
duplicados($array); ?>
<br />
<?php
// Array con duplicidad
$array2 = array("color", "edad", "Sonido", "color", "edad", "Sonido");
duplicados($array2);
?>