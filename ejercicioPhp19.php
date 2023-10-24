<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Calculadora de Factorial</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="numero" class="form-label">Ingresa un número:</label>
                <input type="number" name="numero" id="numero" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Factorial</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['numero'])) {
                $numero = intval($_POST['numero']);
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
                echo "<p>Por favor, ingresa un número válido.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
