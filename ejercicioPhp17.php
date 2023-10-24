<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Variables</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tipo de Variables</h1>
        <?php
        $arrayVariable = array(1, 2, 3);
        $stringVariable = "Hola, soy una cadena";
        $booleanVariable = true;

        echo "<p><strong>La variable \$arrayVariable es de tipo:</strong> " . gettype($arrayVariable) . "</p>";
        echo "<p><strong>La variable \$stringVariable es de tipo:</strong> " . gettype($stringVariable) . "</p>";
        echo "<p><strong>La variable \$booleanVariable es de tipo:</strong> " . gettype($booleanVariable) . "</p>";
        ?>
    </div>
</body>
</html>
