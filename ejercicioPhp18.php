<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de Arrays en Tabla HTML</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Contenido de Arrays en Tabla HTML</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Frutas</th>
                    <th>Deportes</th>
                    <th>Idiomas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Definir los arrays
                $frutas = array("Manzana", "Naranja", "Sandía", "Fresa");
                $deportes = array("Futbol", "Tenis", "Baloncesto", "Beisbol");
                $idiomas = array("Español", "Inglés", "Francés", "Italiano");

                // Recorrer los arrays y mostrar en la tabla
                for ($i = 0; $i < count($frutas); $i++) {
                    echo "<tr>";
                    echo "<td>$frutas[$i]</td>";
                    echo "<td>$deportes[$i]</td>";
                    echo "<td>$idiomas[$i]</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
