<?php
/* Dado un array asociativo, imprimir en forma de lista de definiciones HTML la etiqueta y el valor. 
   Imprimir como resumen el número de elementos del array.*/

   function listaDefiniciones($arrayAsociativo) {
?>
   <dl>
   <?php foreach ($arrayAsociativo as $modulo => $nombreModulo) {?>
      <!--echo "<dt> ".$modulo."</dt> <dd>".$nombreModulo."</dd>";-->
      <dt><?php echo $modulo?></dt><dd><?php echo $nombreModulo?></dd>
   <?php }?>
   </dl>

   <?php }?>

<?php
$arrayAsociativo = array("DWES" => "Desarrollo web en entorno servidor", "DWEC" => "Desarrollo Web en Entorno Cliente", "DIW" => "Diseño Interfaces Web", "DAW" => "Despliegue de Aplicaciones Web", "HLC" => "Horas de Libre Configuracion");
listaDefiniciones($arrayAsociativo);


$array2 = array("color" => "Rojo", "edad" => "30", "Sonido" => "Zumbido");
listaDefiniciones($array2); ?>