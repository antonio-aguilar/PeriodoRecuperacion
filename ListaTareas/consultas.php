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
function listarTareasEnTabla() {
    // Consulta
    $conx = mysqli_connect ("localhost","tareas","tareas");
    if (!$conx) die ("Error al abrir la base <br/>". mysqli_error()); 
    mysqli_select_db($conx,"tareas") OR die("Connection Error to Database");   

    /* Realizamos la consulta SQL */
    $sql="SELECT id, descripcion, completada FROM lista_tareas";
    $result= mysqli_query($conx,$sql) or die(mysqli_error());
    if(mysqli_num_rows($result)==0) die("No hay registros para mostrar");

    /* Desplegamos cada uno de los registros dentro de una tabla */  
    echo "<table border=1 cellpadding=4 cellspacing=0>";

  /*Primero los encabezados*/
   echo "<tr>
           <th colspan=5> Tareas </th>
         <tr>
       <th> ID </th><th> Descripcion </th> <th> Completada </th>
    </tr>";

    /*Y ahora todos los registros */
    while($row=mysqli_fetch_array($result)){
       echo "<tr>
       <td> $row[id] </td>
       <td> $row[descripcion] </td>
       <td> $row[completada] </td>
    </tr>";}

    echo "</table>";
}

// Funcion para ver las tareas
function listarTareas() {

}

// Funcion para añadir tareas
function añadirTareas() {
    
}

// Funcion para modificar tareas
function listaDefiniciones() {
    
}

// Funcion para borrar tareas
function borrarTareas() {
    
}

// Comprobacion de si accedo desde el index a las funciones de las consultas

?>