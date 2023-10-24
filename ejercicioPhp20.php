<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha Actual</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Fecha Actual</h1>
        <?php
    
        function mostrarFechaActual() {
            $fechaActual = date("d/m/Y H:i:s"); // Formato de fecha y hora
            echo "<p>La fecha y hora actual es: $fechaActual</p>";
        }

        
        mostrarFechaActual();
        ?>
    </div>
</body>
</html>
