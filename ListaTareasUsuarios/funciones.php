<?php
// Llamada a archivos requeridos
require_once "bd.php";

// Header de la web
function encabezado() {
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tareas</title>
</head>
<body>

    <header class="header">
        
        <?php
            
            // Titulo del encabezado de la web
            if (isset($_SESSION['usuario'])) {
                echo "<h1><a href=\"indexTareas.php\">Tareas pendientes del usuario " . $_SESSION['usuario'] . "</a></h1>";
            } else {
                echo "<h1><a href=\"indexTareas.php\">Tareas pendientes</a></h1>";
            }

            // Si el usuario esta logueado mostrara el enlace para logout y de no estarlo mandara a la pagina de login
            if (isset($_SESSION['usuario'])) {
                echo "<a href=\"logout.php\">Logout</a>";
            } else {
                echo "<a href=\"login.php\">Login</a>";
            }
        
        ?>
    </header>
    
    <div id="container">
    <div id="main">
<?php } ?>


<?php 
// Footer de la web
function pie() { ?>
    </div>
    </div>
    <footer>
        <p>Copyright © Antonio Manuel Aguilar Caro</p>
    </footer>
</body>
</html>
<?php } ?>