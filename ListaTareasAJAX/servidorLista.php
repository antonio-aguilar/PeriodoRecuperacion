<?php

// Llamada a archivos requeridos
require_once "bd.php";

// Funcion para ver todas las tareas
//function listarTareas($bd) {
    header('Content-Type: application/json'); // Esta línea indica que la respuesta es JSON
    header("Cache-Control: no-cache, must-revalidate"); // Esta línea ayuda a que la respuesta no se incluya en caché
    
    $consulta = $bd->prepare("SELECT id, descripcion, completada FROM lista_tareas");
    $consulta->execute();

    if ($tareas = $consulta->fetchAll()) {
        echo json_encode($tareas);
    }
    
//}

?>