<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array con Valores</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Array con Valores</h1>
        <?php
        // Crear un array vacío
        $miArray = array();

        // Añadir valores al array hasta que su longitud sea menor a 100
        while (count($miArray) < 100) {
            $valor = rand(1, 1000); // Generar un valor aleatorio
            $miArray[] = $valor;    // Añadir el valor al array
        }

        // Mostrar la información del array
        echo "<p><strong>Longitud del array:</strong> " . count($miArray) . "</p>";
        echo "<p><strong>Valores del array:</strong> " . implode(", ", $miArray) . "</p>";
        ?>
    </div>
</body>
</html>
