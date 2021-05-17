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
require_once "bd.php";

// Funcion para ver las tareas pendientes
function listarTareas($bd) {

  echo "<h3>Listado de tareas</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id, descripcion, completada FROM lista_tareas WHERE completada = 0";

  // Encabezado de la tabla
  echo "<table border=1 cellpadding=4 cellspacing=0>";
  echo "<tr>
  <th colspan=5> Tareas </th>
  <tr>
  <th> ID </th><th> Descripción </th> <th> Completada </th> <th> Completar tarea </th> <th> Borrar tarea </th>
  </tr>";

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    echo "<td>"; print $row['id'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['descripcion'] . "\t"; echo "</td>";
    // Columna completada
    echo "<td>";if($row['completada'] == "0") {
      echo "<font color=\"#ff0000\">no</font>";
    } else {
      echo "<font color=\"#006600\">si</font>";
    } echo "</td>";
    // Columna enlace para completar una tarea
    echo "<td> <a href=\"completarTareas.php?id=" . $row['id'] . "\"> Completar" . "</a></td>";
    // Columna enlace para completar una tarea
    echo "<td> <a href=\"completarTareas.php?id=" . $row['id'] . "\"> Borrar" . "</a></td>";
    
    echo "</tr>";
  }
  echo "</table>";
}

// Funcion para ver todas las tareas
function listarTareas1($bd) {

  echo "<h3>Listado de tareas</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id, descripcion, completada FROM lista_tareas";

  // Encabezado de la tabla
  echo "<table border=1 cellpadding=4 cellspacing=0>";
  echo "<tr>
  <th colspan=5> Tareas </th>
  <tr>
  <th> ID </th><th> Descripción </th> <th> Completada </th> <th> Completar tarea </th> <th> Borrar tarea </th>
  </tr>";

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    echo "<td>"; print $row['id'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['descripcion'] . "\t"; echo "</td>";
    // Columna completada
    echo "<td>";if($row['completada'] == "0") {
      echo "<font color=\"#ff0000\">no</font>";
    } else {
      echo "<font color=\"#006600\">si</font>";
    } echo "</td>";
    // Columna enlace para completar una tarea
    echo "<td> <a href=\"completarTareas.php?id=" . $row['id'] . "\"> Completar" . "</a></td>";
    // Columna enlace para completar una tarea
    echo "<td> <a href=\"completarTareas.php?id=" . $row['id'] . "\"> Borrar" . "</a></td>";

    echo "</tr>";
  }
  echo "</table>";
}

// Funcion mostrar formulario
function mostrarFormularioTareas() {
  // Titulo  
  echo "<h3>Añadir tarea</h3>";

  // Formulario
  echo "<form name=\"formulario1\" action=\"indexTareas.php\" method=\"post\">";
  echo "<p>Descripción: <input type=\"text\" name=\"descripcion\"></p>";
  echo "<p><input type=\"submit\" name=\"enviar\" value=\"Enviar\"></p>";
  echo "</form>";

} 

// Funcion para añadir tareas
function añadirTarea($bd, $descripcion) {
  $insertarDescripcion = $bd->exec("INSERT INTO `lista_tareas` (`descripcion`) VALUES ('$descripcion')");
}

// Funcion para modificar si una tarea esta completada
function modificarCompletadas($bd,$id) {
  $modificaCompletada = $bd->exec("UPDATE `lista_tareas` SET `completada` = '1' WHERE `lista_tareas`.`id` = $id");
}

// Funcion para borrar tareas
function borrarTareas($bd,$id) {
  $borrar = $bd->exec("DELETE FROM `lista_tareas` WHERE `lista_tareas`.`id` = $id");
}

?>