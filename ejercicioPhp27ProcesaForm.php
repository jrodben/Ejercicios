<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Validación</title>
    <!-- Enlace a Bootstrap CSS a través de una CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Formulario de Validación</h1>
        <form action="ejercicioPhp27ProcesaForm.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" maxlength="20" pattern="[A-Za-z]+" required>
                <div class="invalid-feedback">El nombre debe contener solo letras y tener una longitud máxima de 20 caracteres.</div>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" pattern="[A-Za-z]+" required>
                <div class="invalid-feedback">Los apellidos deben contener solo letras.</div>
            </div>
            <div class="mb-3">
                <label for="biografia" class="form-label">Biografía:</label>
                <textarea name="biografia" id="biografia" class="form-control" required></textarea>
                <div class="invalid-feedback">La biografía no puede estar vacía.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <div class="invalid-feedback">El email debe ser válido.</div>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" minlength="7" required>
                <div class="invalid-feedback">La contraseña debe tener al menos 7 caracteres.</div>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen de Perfil:</label>
                <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>
</html>
