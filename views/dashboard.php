<?php
//crea o reanuda una sesión existente, lo que permite al servidor almacenar información específica del usuario en la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <!-- Agrega tus archivos CSS o enlaces a CDN aquí -->
    <link rel="stylesheet" href="ruta_tu_archivo_css.css">
</head>

<body>
    <!-- Incluye el archivo de cabecera -->
    <?php include 'nav.php'; ?>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">NoteBoost - Dashboard</span>
        </div>
        <div>
            <!-- Aquí puedes agregar el contenido de tu panel de control -->
        </div>
    </section>

    <!-- Agrega tus archivos JavaScript o enlaces a CDN aquí -->
    <script src="ruta_tu_archivo_js.js"></script>
</body>

</html>
