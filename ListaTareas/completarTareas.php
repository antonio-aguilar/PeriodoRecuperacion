<?php 

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bd.php";
require_once "funcionesConsultas.php";

// Recoger datos
$id = $_REQUEST["id"];

// Modificamos la tarea
modificarCompletadas($bd,$id);
// Modificamos la tarea
borrarTareas($bd,$id);

// Volvemos a la pagina principal
header("Location: indexTareas.php");

?>