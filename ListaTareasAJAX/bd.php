<?php 

// Coneccion a la base de datos con mysql
try {
    $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bd = new PDO('mysql:host=localhost;dbname=tareas;charset=utf8', 'tareas', 'tareas', $opciones);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

?>