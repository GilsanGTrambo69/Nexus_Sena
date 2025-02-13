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
        <!--Apartado de encuestas de LOS APRENDICES-->
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
                            <form action="">
                                <div class="contenedor-encuesta">
                                    <div class="opc-encuesta">
                                        <div class="container-opc">
                                            <div class="container-opc2">
                                                <input type="radio" name="size" id="large1">
                                                <label for="large1"><span class="text-opc">Opcion 1</span></label>
                                            </div>
                                            <div class="number-vote"><span>Numero de votos</span></div>
                                        </div>
                                        <div class="container-opc">
                                            <div class="container-opc2">
                                                <input type="radio" name="size" id="large2">
                                                <label for="large2"><span class="text-opc">Opcion 1</span></label>
                                            </div>
                                            <div class="number-vote"><span>Numero de votos</span></div>
                                        </div>
                                        <div class="container-opc">
                                            <div class="container-opc2">
                                                <input type="radio" name="size" id="large3" >
                                                <label for="large3"><span class="text-opc">Opcion 1</span></label>
                                            </div>
                                            <div class="number-vote"><span>Numero de votos</span></div>
                                        </div>
                                    </div>
                                    <div class="votar-button">
                                        <button type="submit">Votar</button>
                                    </div>
                                    <div class="encuesta-footer">
                                        <span>Numero de votos</span>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>                                                      
                    </div>
                </div>
            </div><
        </main>
        <!-- Toggle Button -->
        <button class="sidebar-toggle" id="sidebarToggle">☰</button>
    </div>
    <script src="js/scripts-encuestas.js"></script>
    <script src="js/scripts.js" ></script>

</body>
</html>