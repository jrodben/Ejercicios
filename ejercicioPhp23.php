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
        
        function mostrarTablaMultiplicar($numero) {
            echo "<h2>Tabla de Multiplicar del $numero</h2>";
            echo "<table class='table table-striped'>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        }

        mostrarTablaMultiplicar(7);
        ?>
    </div>
</body>
</html>
