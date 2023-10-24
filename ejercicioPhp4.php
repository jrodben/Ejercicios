<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación de los 20 primeros números naturales</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Multiplicación de los 20 primeros números naturales</h1>
        <ul class="list-group">
            <?php
            $resultado = 1;
            for ($i = 1; $i <= 20; $i++) {
                $resultado *= $i;
                echo "<li class='list-group-item'>El producto de los primeros $i números naturales es $resultado</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
