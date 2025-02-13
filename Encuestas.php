<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page-container.css">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/encuestas.css">

    <title>Plantilla pagina de inicio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #f0f0f0;
            min-height: 100vh;
        }
        .main-content{
            max-height: 80vh !important;
        }
    </style>
</head>
<body>
    <!--Apartado de encuestas de el ADMINISTRADOR, PERSONAL DE BIENESTAR Y LOS INSTRUCTORES-->
    <div class="page-container">
        <!-- Header -->

        <?php
            require 'cabecera.php';
        ?>


        <!-- Sidebar -->
        <?php
            require 'sidebar.php';
        ?>

        <!-- Main Content -->
        <main class="main-content">
            <div class="all-post">
                <button class="create-post-button" id="crear-encuesta-button">Crear una Encuesta</button>
                <?php require 'crear-encuesta-modal.php';?>
                <!--Contenedor de una encuesta-->
                <div class="contenedor-publicacion">
                    <div class="publicacion-header">
                        <div class="profile-picture">
                            <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                        </div>
                        <div class="user-info">
                            <div class="Nombre-usuario">Sena oficial</div>
                            <div class="fecha-publicacion">Fecha de la publicacion</div>
                        </div>
                    </div>
                    <div class="contenedor-publicacion2">
                        <div class="contenedor-publicacion3">
                            <p>Una encuesta</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Toggle Button -->
        <button class="sidebar-toggle" id="sidebarToggle">☰</button>
    </div>
    <script src="js/scripts.js" ></script>

</body>
</html>