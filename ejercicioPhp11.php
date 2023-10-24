<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Bueno o No Bueno</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Número Bueno o No Bueno</h1>
        <?php
        // Verificar si se ha pasado un número como parámetro GET (parámetro "numero")
        if (isset($_GET['numero'])) {
            $numero = intval($_GET['numero']);
            $sumaDivisores = 0;

            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i === 0) {
                    $sumaDivisores += $i;
                }
            }

            if ($sumaDivisores === $numero) {
                echo "<p>El número $numero es un número bueno.</p>";
            } else {
                echo "<p>El número $numero no es un número bueno.</p>";
            }
        } else {
            echo "<p>Por favor, proporciona un número como parámetro 'numero' en la URL.</p>";
        }
        ?>
    </div>
</body>
</html>
