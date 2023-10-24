<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres de los Meses</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Nombres de los Meses</h1>
        <ul class="list-group">
            <?php
            $meses = array(
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            );

            for ($i = 0; $i < count($meses); $i++) {
                echo "<li class='list-group-item'>" . $meses[$i] . "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
