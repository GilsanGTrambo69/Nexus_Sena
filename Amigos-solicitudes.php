<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page-container.css">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/amigos.css">
    <title>Amigos</title>
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
                <div class="friends-container">
                    <h2 class="titulo-verde-apartado">Solicitudes</h2>
                    <span class="titulo-amigos">Solicitudes</span>
                    <div class="button-container-amigos">
                        <a href="Amigos.php">
                            <button class="btn-amigos">Mis Amigos</button>
                        </a>
                        <a href="Amigos-solicitudes.php">
                            <button class="btn-amigos">Solicutudes de Amistad</button>
                        </a>
                    </div>
                    <span class="titulo-amigos"></span>
                    <div class="my-friends">
                        <div class="container">
                            <div class="image">
                                <img src="assets/img/foto-perfil.png" alt="Imagen" class="image2">
                            </div>
                            <div class="text-container">
                                <p class="text">Gilsan Yainiber Rodriguez Forero</p>
                                <p class="text-roll">Aprendiz</p>
                            </div>
                            <div class="buttons-container">
                            <button class="eliminar-solicitud" >Eliminar</button>
                                <button class="button">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Toggle Button -->
        <button class="sidebar-toggle" id="sidebarToggle">☰</button>
    </div>
    <!--Modal para eliminar a alguien de la lista de amigos-->
    <div class="eliminar-back" id="eliminar-back2">
        <div class="eliminar-post-container">
            <center>
                <img src="assets/img/alert-red.png" alt="">
                <br>
                <br>
                <br>
                <br>
                <p>Desea eliminar de la lista de amigos</p>
                <br>
                <br>
                <div>
                    <button class="cancelar" id="cancelar-eliminacion2">Cancelar</button>
                    <button class="eliminar-amigo-button">Eliminar</button>
                </div>
            </center>
        </div>
    </div>
    <script src="js/scripts-amigos.js"></script>
    <script src="js/scripts.js" ></script>

</body>
</html>