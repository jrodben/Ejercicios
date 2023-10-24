<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Email</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Validación de Email</h1>
        <?php
        if (isset($_GET['email'])) {
            $email = $_GET['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>El email $email es válido.</p>";
            } else {
                echo "<p>El email $email no es válido.</p>";
            }
        } else {
            echo "<p>Por favor, proporciona un email como parámetro 'email' en la URL.</p>";
        }
        ?>
    </div>
</body>
</html>
