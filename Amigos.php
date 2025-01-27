<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/page-container.css">
    <link rel="stylesheet" href="./assets/css/amigos.css">

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
                    <span class="titulo-amigos">Mis Amigos</span>
                    <div class="my-friends">
                        <div class="user-info-amigo">
                            <!--Informacion del usuario en el comentario-->
                            <div class="profile-picture-amigo">
                                <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                            </div>
                            <div class="user-info-amigo">
                                <div class="nombre-usurio-amigo">Sena oficial</div>
                                
                                <div class="user-roll-coment">Aprediz</div>
                            </div>
                            <div class="right-button">
                                <button class="friend-button">Amigos</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="friends-container">
                    <span class="titulo-amigos">Solicitudes</span>
                    <div class="my-friends">
                        <div class="user-info-amigo">
                            <!--Informacion del usuario en el comentario-->
                            <div class="profile-picture-amigo">
                                <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                            </div>
                            <div class="user-info-amigo">
                                <div class="nombre-usurio-amigo">Sena oficial</div>
                                
                                <div class="user-roll-coment">Aprediz</div>
                            </div>
                            <div class="right-button">
                            <button class="eliminar-solicitud">Eliminar</button>
                            </div>
                            <div class="right-button">
                                <button class="friend-button">Amigos</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="friends-container">
                    <span class="titulo-amigos">Personas que quizas conozcas</span>
                    <div class="my-friends">
                        <div class="user-info-amigo">
                            <!--Informacion del usuario en el comentario-->
                            <div class="profile-picture-amigo">
                                <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                            </div>
                            <div class="user-info-amigo">
                                <div class="nombre-usurio-amigo">Sena oficial</div>
                                
                                <div class="user-roll-coment">Aprediz</div>
                            </div>
                            <div class="right-text">
                                <button class="friend-button">Amigos</button>
                            </div>
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