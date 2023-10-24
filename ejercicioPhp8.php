<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un Número</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Factorial de un Número</h1>
        <?php
        // Verificar si se ha pasado un número a través de la URL (parámetro "numero")
        if (isset($_GET['numero'])) {
            $numero = intval($_GET['numero']);
            $factorial = 1;

            if ($numero < 0) {
                echo "<p>El factorial no está definido para números negativos.</p>";
            } else {
                for ($i = 1; $i <= $numero; $i++) {
                    $factorial *= $i;
                }
                echo "<p>El factorial de $numero es $factorial</p>";
            }
        } else {
            echo "<p>Por favor, proporciona un número a través de la URL utilizando el parámetro 'numero'.</p>";
        }
        ?>
    </div>
</body>
</html>
