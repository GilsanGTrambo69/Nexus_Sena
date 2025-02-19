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
                    <a href="Inicio.php">
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
                <div class="informacion-usuario">
                    <div class="titulo-config">Centro de cuentas</div>
                    <div class="subtitulo-config">Administra tu experiencia y la configuración de tu cuenta nexus.</div>
                    <div class="opciones">
                        <a href="datos-personales.php">
                            <div class="opciones-container">
                                <div class="opc-con">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="12" fill="#22c55e"/>
                                        <g transform="translate(6, 5)" fill="none" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 1H2c-.5 0-1 .5-1 1v10c0 .5.5 1 1 1h8c.5 0 1-.5 1-1V4L8 1z"/>
                                            <path d="M4 6h4M4 9h4M4 12h3"/>
                                            <path d="M11 3H5c-.5 0-1 .5-1 1v10c0 .5.5 1 1 1h8c.5 0 1-.5 1-1V6l-3-3z"/>
                                        </g>
                                    </svg>
                                    <div class="text-confg">Datos personales</div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="contraseña-y-seguridad.php">
                            <div class="opciones-container">
                                <div class="opc-con">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="12" fill="#22c55e"/>
                                        <g transform="translate(7, 6)" fill="none" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="0" y="5" width="10" height="8" rx="1"/>
                                            <path d="M2 5V4a3 3 0 0 1 6 0v1"/>
                                            <circle cx="5" cy="9" r="1" fill="white"/>
                                        </g>
                                    </svg>
                                    <div class="text-confg">Contraseña y seguridad</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="informacion-usuario">
                    <div class="titulo-config">Centro de cuentas</div>
                    <div class="subtitulo-config">Administra tu experiencia y la configuración de tu cuenta nexus.</div>
                    <div class="opciones">
                        <a href="notificaciones.php">
                            <div class="opciones-container">
                                <div class="opc-con">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="12" fill="#22c55e"/>
                                        <g transform="translate(8, 6)" fill="none" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 12c.5 0 .9-.3 1.1-.7H2.9c.2.4.6.7 1.1.7z"/>
                                            <path d="M8 4a4 4 0 0 0-8 0c0 5-2 6-2 6h12s-2-1-2-6"/>
                                            <path d="M4 2V1"/>
                                        </g>
                                    </svg>
                                    <div class="text-confg">Notificaciones</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </main>
    </div>

</body>
</html>

