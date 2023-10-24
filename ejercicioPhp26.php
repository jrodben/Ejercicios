<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formulario</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Datos del Formulario</h1>
        <?php
        // Comprobar si se han enviado datos por POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "<h2>Datos recibidos:</h2>";
            echo "<ul>";

            // Comprobar y mostrar el nombre
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'No definido :(';
            echo "<li>Nombre: $nombre</li>";

            // Comprobar y mostrar los apellidos
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : 'No definido :(';
            echo "<li>Apellidos: $apellidos</li>";

            // Comprobar y mostrar la biografía
            $biografia = isset($_POST['biografia']) ? $_POST['biografia'] : 'No definido :(';
            echo "<li>Biografía: $biografia</li>";

            // Comprobar y mostrar el email
            $email = isset($_POST['email']) ? $_POST['email'] : 'No definido :(';
            echo "<li>Email: $email</li>";

            // Comprobar y mostrar la contraseña (se recomienda no mostrar contraseñas en pantalla)
            $contrasena = isset($_POST['contrasena']) ? 'Ingresada' : 'No definida :(';
            echo "<li>Contraseña: $contrasena</li>";

            // Comprobar y mostrar la imagen
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                $imagen_nombre = $_FILES['imagen']['name'];
                echo "<li>Imagen de Perfil: $imagen_nombre</li>";
            } else {
                echo "<li>Imagen de Perfil: No definida :(";
            }

            echo "</ul>";
        } else {
            echo "<p>No se han recibido datos por POST.</p>";
        }
        ?>
    </div>
</body>
</html>
