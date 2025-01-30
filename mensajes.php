<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/page-container.css">
    <link rel="stylesheet" href="./assets/css/amigos.css">
    <link rel="stylesheet" href="./assets/css/mensajes.css">
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
        <main class="main-content2">
            <div class="all-chats">
                <section class="chats">
                    <div class="cabecera-chats">
                        <div>
                            <h1 class="chats-titulo">Mensajes</h1>
                        </div>
                    </div>
                    <div class="barra-busqueda">
                        <div class="search-container2">
                            <input type="text" class="search-input2" placeholder="Buscar">
                            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                            </svg>
                        </div>
                    </div>
                    <div class="usuario-container">
                        <div class="my-friends">
                            <div class="container">
                                <div class="image">
                                    <img src="assets/img/foto-perfil.png" alt="Imagen" class="image2">
                                </div>
                                <div class="text-container">
                                    <p class="text">Gilsan Yainiber Rodriguez Forero</p>
                                    <p class="text-roll">mensaje</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-friends">
                        <div class="container">
                            <div class="image">
                                <img src="assets/img/foto-perfil.png" alt="Imagen" class="image2">
                            </div>
                            <div class="text-container">
                                <p class="text">Gilsan Yainiber Rodriguez Forero</p>
                                <p class="text-roll">mensaje</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="conversacion">
                    <div>
                        <div>

                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- Toggle Button -->
        <button class="sidebar-toggle" id="sidebarToggle">☰</button>
    </div>
</body>
</html>