<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/mi-muro.css">
    <link rel="stylesheet" href="./assets/css/page-container2.css">
    <title>Perfil de Usuario</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .sidebar {
            display: none;
        }
        .sidebar-toggle{
            display: none;
        }

        .profile-picture-m{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="page-container">
        <!-- Header -->
        <?php require 'cabecera.php'; ?>


        <!-- Sidebar -->
        
        <?php
            require 'sidebar.php';
        ?>

        <!-- Main Content -->
        <main class="main-content">
            <div class="all-post">
                <div class="profile-container-m">
                    <div class="banner-m">
                        <img src="assets/img/peperina.jpg" alt="">
                        <div class="profile-picture-m">
                            <img src="./assets/img/foto-perfil.png" alt="Foto de perfil">
                        </div>
                    </div>
                    <div class="profile-info-m">
                        <div class="profile-header-m">
                            <div class="name-section-m">
                                <h1 class="name-m">Omar Alejandro Galvis Espitia</h1>
                                <p class="role-m">Aprendiz - Etapa Electiva</p>
                            </div>
                            <a href="editar-perfil.php" class="edit-button-m">
                                Editar mi información
                                <svg class="edit-icon-m" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="profile-details-m">
                            <p>ADSO- 2847293</p>
                            <p>Quebrajacho - Fusagasugá</p>
                            <p>Edad 21 años</p>
                        </div>
                        <a href="ver-perfil-completo.php" class="view-profile-m">Ver perfil completo</a>
                    </div>
                </div>
                <button class="create-post-button" id="create-post-button">Crear una Publicacion</button>
            <!--Contenedor de una publicacion-->
            <div class="contenedor-publicacion">
                    <div class="publicacion-header">
                        <div class="profile-picture">
                            <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                        </div>
                        <div class="user-info">
                            <div class="Nombre-usuario">Alejandro</div>
                            <div class="fecha-publicacion">Fecha de la publicacion</div>
                        </div>
                    </div>
                    <div class="contenedor-publicacion2">
                        <div class="contenedor-publicacion3">
                            <p> Peperina es una canción progresiva que comienza y los otros instrumentos van apareciendo poco a poco. La canción se va acelerando con el tiempo y contiene solos de sintetizador. Fue compuesta principalmente por el pianista y vocalista Charly García. La letra cuenta la historia de una chica llamada Peperina quien en realidad es Patricia Perea, una periodista de rock nacida en Córdoba que trabajaba en la revista Expreso Imaginario. Criticó una actuación de la banda en Córdoba por lo que, sin poder aceptar las críticas y en forma de represalia, Charly escribió una canción que la presenta como una groupie despechada.</p>
                            <img src="./assets/img/peperina.jpg" alt="publicacion img" class="publicacion-img">
                        </div>
                    </div>
                    <div class="publicacion-buttons">
                        <div class="button-container">
                            <p class="button-text">No Me gusta</p>
                            <button id="like-btn">
                                <span id="like-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" class="corazon">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                    </svg>
                                </span>
                                <span class="text-button-post">Me gusta</span>
                            </button>
                        </div>
                        <div class="button-container">
                            <p class="button-text">No comentarios</p>
                            <button id="coment-button">
                                <span class="like-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(46, 181, 74)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                        <polyline points="16 6 12 2 8 6"></polyline>
                                        <line x1="12" y1="2" x2="12" y2="15"></line>
                                    </svg>
                                </span>
                                <span class="text-button-post">Comentarios</span>
                            </button>
                        </div>
                        <div class="button-container">
                            <p class="button-text">No compartidos</p>
                            <button>
                                <span class="like-icon">
                                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="rgb(46, 181, 74)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5z"></path>
                                        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path>
                                    </svg>
                                </span>
                                <span class="text-button-post">Compartir</span>
                            </button>
                        </div>
                    </div>
                    <div class="caja-comentarios" id="caja-comentarios">
                        <div class="comentario">
                            <div class="comentario1">
                                <div class="user-info-comentario">
                                    <!--Informacion del usuario en el comentario-->
                                    <div class="profile-picture">
                                        <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                                    </div>
                                    <div class="user-info-coment">
                                        <div class="nombre-usurio-coment"><span class="user-roll-coment">Aprendiz Sena-</span>Sena oficial</div>
                                        <div class="comentario-user">Aqui va el texto de un comentario</div>
                                        
                                        <div class="responder-comentario" id="responder-comentario">Responder</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comentario1">
                                <div class="user-info-comentario">
                                    <!--Informacion del usuario en el comentario-->
                                    <div class="profile-picture">
                                        <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                                    </div>
                                    <div class="user-info-coment">
                                        <div class="nombre-usurio-coment"><span class="user-roll-coment">Aprendiz Sena-</span>Sena oficial</div>
                                        <div class="comentario-user">Aqui va el texto de un comentario</div>
                                        
                                        <div class="responder-comentario" id="responder-comentario">Responder</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comentario1">
                                <div class="user-info-comentario">
                                    <!--Informacion del usuario en el comentario-->
                                    <div class="profile-picture">
                                        <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                                    </div>
                                    <div class="user-info-coment">
                                        <div class="nombre-usurio-coment"><span class="user-roll-coment">Aprendiz Sena-</span>Sena oficial</div>
                                        <div class="comentario-user">Aqui va el texto de un comentario</div>
                                        
                                        <div class="responder-comentario" id="responder-comentario">Responder</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comentario1">
                                <div class="user-info-comentario">
                                    <!--Informacion del usuario en el comentario-->
                                    <div class="profile-picture">
                                        <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                                    </div>
                                    <div class="user-info-coment">
                                        <div class="nombre-usurio-coment"><span class="user-roll-coment">Aprendiz Sena-</span>Sena oficial</div>
                                        <div class="comentario-user">Aqui va el texto de un comentario</div>
                                        
                                        <div class="responder-comentario" id="responder-comentario">Responder</div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="separador-post"></div>
                </div>
            </div>
    </main>
    <!--Eliminar post confirmacion-->

    <div class="eliminar-back" id="eliminar-back1">
        <div class="eliminar-post-container">
            <center>
                <img src="assets/img/alert-red.png" alt="">
                <br>
                <br>
                <br>
                <br>
                <p>Desea eliminar esta publicación, una vez eliminada no se podrá recuperar nuevamente.</p>
                <br>
                <br>
                <div>
                    <button class="cancelar" id="cancelar-eliminacion1">Cancelar</button>
                    <button class="eliminar-post-button">Eliminar</button>
                </div>
            </center>
        </div>
    </div>

    <?php include 'crear-publicacion.php';?>
    
    <!--Vista previa-->
    <script src="js/scripts.js"></script>
    <script src="js/scripts-miMuro.js"></script>
    <script src="js/scripts-caja-comentarios.js"></script>
</body>
</html>

