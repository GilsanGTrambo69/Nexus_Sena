<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/mi-muro.css">
    <link rel="stylesheet" href="./assets/css/page-container2.css">
    <link rel="stylesheet" href="./assets/css/configuracion.css">

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
    </style>
</head>
<body>
    <div class="page-container">
        <!-- Main Content -->
        <main class="main-content">
            <div class="all-post">
                <div class="header-config">
                    <a href="Configuracion.php">
                        <div class="back-icon-config">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12" fill="#22c55e"/>
                                <g transform="translate(6, 6)" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 6H2"/>
                                    <path d="M6 2L2 6l4 4"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                    
                    <div class="nexus-logo">
                        <img src="assets/img/logo-sena.png" alt="logo-nexus">
                    </div>
                </div>
                
                <!--Contendor-->
                <div>
                    <div class="titulo-config">Datos personales</div>
                    <div class="subtitulo-config"> Esta información se usa para verificar tu identidad y proteger a nuestros aprendices.</div>
                    <div class="subtitulo-config">Tú decides que datos personales quieres mostrar a los demás.</div>
                </div>
                <div class="informacion-usuario">
                    <div class="titulo-config">Informacion de contacto</div>
                    <div class="info-container">
                        <div class="subtitulo-verde">Correo Sena</div>
                        <div class="text-gray">gilyrodriguez@soy.sena.edu.co</div>
                    </div>
                    <div class="info-container">
                        <div class="subtitulo-verde">Correo Personal</div>
                        <div class="text-gray">- - -</div>
                    </div>
                    <div class="info-container">
                        <div class="subtitulo-verde">Numero de telefono</div>
                        <div class="text-gray">- - -</div>
                    </div>
                    <div class="editar-info" ><span class="editar-info-text" id="editar-button">Editar información</span></div>
                    <?php include 'editar-datos-personales-modal.php' ?>
                </div>

                <div class="informacion-usuario">
                    <div class="titulo-config">Informacion del aprendiz</div>
                    <div class="info-container">
                        <div class="subtitulo-verde">Programa inscrito</div>
                        <div class="text-gray">Nombre del programa</div>
                    </div>
                    <div class="info-container">
                        <div class="subtitulo-verde">Etapa del programa</div>
                        <div class="text-gray">Estapa</div>
                    </div>
                    <div class="info-container">
                        <div class="subtitulo-verde">Otros cursos (esto solo lo podras ver tu)</div>
                        <div class="text-gray">nombre del curso</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/scripts-datos-personales.js" defer></script>
</body>
</html>

