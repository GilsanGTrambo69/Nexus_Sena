<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/page-container.css">
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
                <section class="chats" id="chats">
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
                    <!--Contenedor de la lista de chats-->
                    <div class="container-chats">
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                        <div class="usuario-container" id="chat-usuario">
                            <div class="foto-usuario">
                                <img src="assets/img/foto-perfil.png" alt="Foto de usuario" class="foto-usuario2">
                            </div>
                            <div class="contenedor-texto">
                                <div class="nombre-usuario">GILSAN YAINIBER RODRIGUE FORERO</div>
                                <div class="mensaje-usuario">ultimo mensaje enviado :V</div>
                            </div>
                        </div>
                    </div>
                    
                    

                </section>
                <section class="conversacion" id="conversacion">
                    <!--En este contendor se encuentra el chat con un usuario-->
                    <div class="conversacion2">
                        <div class="conversacion-header">
                            
                            <div id="button-chats">
                                <svg class="button-chats-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5" stroke="#00A86B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 19L5 12L12 5" stroke="#00A86B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span class="nombre-usuario2">
                                GILSAN YAINIBER RODRIGUEZ FORERO
                            </span>
                            
                        </div>
                        <!--Contenedor que almacenara los mensajes y la barra de texto-->
                        <div class="chat-mensajes">
                            <div class="i">ffff</div>
                        </div>

                        <div class="contenedor-bar">
                            <div class="input-container">
                                <input type="text" class="input-bar" placeholder="Esbribe un mensaje">
                                <svg class="search-icon" width= "30px" height="30px" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- Toggle Button -->
        <button class="sidebar-toggle" id="sidebarToggle">☰</button>
    </div>
    <script src="js/scripts-mensajes.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>