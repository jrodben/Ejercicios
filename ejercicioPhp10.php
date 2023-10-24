<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Múltiplos entre 1 y 100</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Números Múltiplos entre 1 y 100</h1>
        <?php
        // Verificar si se ha pasado un número como parámetro GET (parámetro "multiplo")
        if (isset($_GET['multiplo'])) {
            $multiplo = intval($_GET['multiplo']);
            echo "<p>Números múltiplos de $multiplo entre 1 y 100:</p>";
            echo "<ul class='list-group'>";
            for ($i = 1; $i <= 100; $i++) {
                if ($i % $multiplo === 0) {
                    echo "<li class='list-group-item'>$i</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "<p>Por favor, proporciona un número como parámetro 'multiplo' en la URL.</p>";
        }
        ?>
    </div>
</body>
</html>
