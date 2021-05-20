<?php
session_start();
/* Desarrolla una página web que muestre una lista de cosas por hacer, más usuarios */

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bd.php";
require_once "funcionesConsultas.php";
//require_once "carga.php";

/* Cabecera html de la web */
encabezado();

/* Contenido de la web */

// Si se ha enviado el formulario, usar la funcion añadirTarea(bd, descripcion)
if (isset($_POST["enviar"])) {
    $descripcion = $_POST["descripcion"];
    añadirTarea($bd, $descripcion);
}

// Mostrar el formulario de añadir tareas en caso de estar logueado
if (isset($_SESSION['usuario'])) {
    mostrarFormularioTareas();
} else {
    echo "<p>Logueate para acceder a más funciones!!</p>";
}

// Con este bucle decidimos que funcion elegimos para mostrar las tareas completadas o no 
if (isset($_GET["mostrar_completadas"]) == 1) {
    listarTareas1($bd);
} else {
    listarTareas($bd);
}

// Enlace para mostrar las tareas completadas u ocultar las ya completadas
if (isset($_SESSION['usuario'])) {
    echo "<br /> <a href=\"indexTareas.php?mostrar_completadas=1\"> Mostrar Completadas </a> / <a href=\"indexTareas.php\"> Ocultar Completadas </a>";
}

// Incluir algunos usuarios de prueba con el siguiente archivo php
//include "carga.php";

// Listar Usuarios
listarUsuarios($bd);

/* Pie html de la web */
pie();

?>