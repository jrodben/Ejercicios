<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener la dirección IP del usuario</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Obtener la dirección IP del usuario</h1>
        <?php
        // Obtener la dirección IP del usuario
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "<p><strong>Tu dirección IP es:</strong> $ip</p>";

        // Comprobar si el navegador es Firefox
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($userAgent, 'Firefox') !== false) {
            echo "<p><strong>¡Enhorabuena! Estás usando el navegador Firefox.</strong></p>";
        }
        ?>
    </div>
</body>
</html>
