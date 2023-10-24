<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con un Array de Números</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Operaciones con un Array de Números</h1>
        <?php
        // 1. Definir un array de 5 números enteros
        $numeros = array(5, 2, 8, 1, 9);

        // 1. Recorrer y mostrar el array
        echo "<p><strong>1. Array original:</strong> ";
        echo implode(", ", $numeros) . "</p>";

        // 2. Ordenar y mostrar el array
        sort($numeros);
        echo "<p><strong>2. Array ordenado:</strong> ";
        echo implode(", ", $numeros) . "</p";

        // 3. Mostrar la longitud del array
        $longitud = count($numeros);
        echo "/n<p><strong>3. Longitud del array:</strong> $longitud</p>";

        // 4. Buscar un valor en el array
        $valor_a_buscar = 8;
        if (in_array($valor_a_buscar, $numeros)) {
            echo "<p><strong>4. El valor $valor_a_buscar se encuentra en el array.</strong></p>";
        } else {
            echo "<p><strong>4. El valor $valor_a_buscar no se encuentra en el array.</strong></p>";
        }
        ?>
    </div>
</body>
</html>
