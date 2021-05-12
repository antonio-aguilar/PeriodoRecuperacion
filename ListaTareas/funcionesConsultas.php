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

/* 
    - Funcion para visualizar las tareas
    - Funcion para insertar tarea
    - Funcion para borrar tarea
*/

// Funcion para ver las tareas
/*function listarTareasEnTabla() {
    // Consulta
    $conx = mysqli_connect ("localhost","tareas","tareas");
    if (!$conx) die ("Error al abrir la base <br/>". mysqli_error()); 
    mysqli_select_db($conx,"tareas") OR die("Connection Error to Database");   

    // Realizamos la consulta SQL
    $sql="SELECT id, descripcion, completada FROM lista_tareas";
    $result= mysqli_query($conx,$sql) or die(mysqli_error());
    if(mysqli_num_rows($result)==0) die("No hay registros para mostrar");

    // Desplegamos cada uno de los registros dentro de una tabla
    echo "<table border=1 cellpadding=4 cellspacing=0>";

  // Primero los encabezados
   echo "<tr>
           <th colspan=5> Tareas </th>
         <tr>
       <th> ID </th><th> Descripcion </th> <th> Completada </th>
    </tr>";

    // Y ahora todos los registros
    while($row=mysqli_fetch_array($result)){
       echo "<tr>
       <td> $row[id] </td>
       <td> $row[descripcion] </td>
       <td> $row[completada] </td>
    </tr>";}

    echo "</table>";
}*/

// Funcion para ver las tareas
function listarTareas($bd) {

  echo "<h3>Listado de tareas</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id, descripcion, completada FROM lista_tareas";

  // Encabezado de la tabla
  echo "<table border=1 cellpadding=4 cellspacing=0>";
  echo "<tr>
  <th colspan=5> Tareas </th>
  <tr>
  <th> ID </th><th> Descripción </th> <th> Completada </th> <th> Completar tarea </th>
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
    echo "<td> <a href=indexTareas.php> Completar". "\t"; echo "</a></td>";
    
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
function modificarCompletadas($bd,$completada) {
  $id = $_GET["id"];
  $modificaCompletada = $bd->exec("UPDATE `lista_tareas` SET `completada` = '1' WHERE `lista_tareas`.`id` = $id");
}

// Funcion para borrar tareas
function borrarTareas() {
    
}

?>