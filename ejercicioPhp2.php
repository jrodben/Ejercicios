<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrados de los 30 primeros números naturales</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Cuadrados de los 30 primeros números naturales</h1>
        <ul class="list-group">
            <?php
            for ($i = 1; $i <= 30; $i++) {
                $cuadrado = $i * $i;
                echo "<li class='list-group-item'>El cuadrado de $i es $cuadrado</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
