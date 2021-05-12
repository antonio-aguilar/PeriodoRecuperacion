<?php 
/* 
    Desarrolla una página web que muestre una lista de cosas por hacer:

    La página debe mostrar:

    - El título "Tareas pendientes"
    - Un listado con las tareas pendientes, mostrando la descripción de la tarea y un 
    enlace para marcar la tarea como completada.
    - Un formulario para añadir una nueva tarea.
    - Si el parámetro GET mostrar_completadas está definido, se mostrarán también cada 
    tareas completada y un enlace para borrarla.

    Las tareas se almacenarán en una base de datos.
*/

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bd.php";
require_once "funcionesConsultas.php";

/* Cabecera html de la web */
encabezado();

// Si se ha enviado el formulario, usar la funcion añadirTarea(bd, descripcion)
if (isset($_POST["enviar"])) {
    $descripcion = $_POST["descripcion"];
    añadirTarea($bd, $descripcion);
}

/* Contenido de la web */
// listarTareasEnTabla($bd);
listarTareas($bd);
mostrarFormularioTareas();

/* Pie html de la web */
pie();

?>