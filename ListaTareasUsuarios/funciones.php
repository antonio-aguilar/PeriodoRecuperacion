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
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Tareas</title>
</head>
<body>

    <header>
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
        <!-- Botonera de acceso a redes sociales -->
        <a href="https://www.facebook.com/antoniomanuelaguilarcaro/"><img src="images/iconos sociales/facebook.png"
                alt="facebook" class="social-icons" width="25" height="25"></a>
        <a href="https://twitter.com/aaguilarcaro"><img src="images/iconos sociales/twitter.png" alt="twitter"
                class="social-icons" width="25" height="25"></a>
        <a href="https://www.linkedin.com/in/antonio-manuel-aguilar-caro/"><img
                src="images/iconos sociales/linkedin.png" alt="linkedin" class="social-icons" width="25" height="25"></a>
    </footer>
</body>
</html>
<?php } ?>