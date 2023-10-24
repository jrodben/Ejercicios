<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares entre 1 y 100</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Números Pares entre 1 y 100</h1>
        <ul class="list-group">
            <?php
            for ($i = 2; $i <= 100; $i += 2) {
                echo "<li class='list-group-item'>$i</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
