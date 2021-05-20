<?php
session_start();

// Archivos requeridos en la web
require_once "funciones.php";

// Encabezado de la web
encabezado();

// Funciones necesarias
function user($bd) {
    
    // Sentencia sql para listar los usuarios
    $sql = "SELECT usuario, password_hash FROM usuarios WHERE usuario = :usuario";
    // Preparamos y ejecutamos la consulta sql
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario']]);
    $usuario = $consulta->fetch(PDO::FETCH_OBJ);
    // Si el usuario no esta vacia y la contraseña es correcta con la contraseña del usuario hara lo que le digamos
    if (!empty($usuario) and password_verify($_POST['password'], $usuario->password_hash)) {
        $_SESSION['usuario'] = $usuario->usuario;
        header("Location: indexTareas.php");
    } else {
        echo 'Usuario o clave incorrectos';
    }

}
// Titulo  
echo "<h3>Login sesion</h3>";

// Formulario
echo "<form name=\"formularioLogin\" action=\"login.php\" method=\"post\">";
echo "<p>Usuario: <input type=\"text\" name=\"usuario\" required></p>";
echo "<p>Contraseña: <input type=\"password\" name=\"password\" required></p>";
echo "<p><input type=\"submit\" name=\"login\" value=\"login\"></p>";
echo "</form>";

if (isset($_POST["login"])) {
    user($bd);
}

// Pie de la web
pie();

?>