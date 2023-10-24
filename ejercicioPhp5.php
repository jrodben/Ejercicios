<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tabla de Multiplicar</h1>
        <?php
        // Verificar si se ha pasado un número a través de la URL (parámetro "numero")
        if (isset($_GET['numero'])) {
            $numero = intval($_GET['numero']);
            echo "<h2>Tabla de multiplicar del número $numero:</h2>";
            echo "<ul class='list-group'>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li class='list-group-item'>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, proporciona un número a través de la URL utilizando el parámetro 'numero'.</p>";
        }
        ?>
    </div>
</body>
</html>
