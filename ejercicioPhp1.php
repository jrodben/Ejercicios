<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <!-- este enlace para poder usar los estilos de boostrap, si no lo ponemos tenemos que incluirlo en el servidor -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        $uno = "Antonio";
        $dos = 97.5;
        ?>
        <div class="alert alert-primary" role="alert">
            <!-- La primera variable contiene un dato de tipo String -->
            <strong>Nombre:</strong> <?php echo $uno; ?>
        </div>
        <div class="alert alert-success" role="alert">
            <!-- La primera variable contiene un dato de tipo float o decimal -->
            <strong>Peso:</strong> <?php echo $dos; ?>
        </div>
    </div>
</body>
</html>