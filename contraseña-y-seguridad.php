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
                                <circle cx="12" cy="12" r="12" fill="#00d100"/>
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
                    <div class="titulo-config">Contraseña y seguridad</div>
                    <div class="subtitulo-config">Administra tus contraseñas, preferencias de inicio de sesión y métodos de recuperación.</div>
                </div>
                <div class="informacion-usuario">
                    <a href="cambiar-contraseña.php">
                        <div class="opciones-container">
                            <div class="opc-con">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="12" fill="#00d100"/>
                                    <g transform="translate(5, 7)" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="0" y="3" width="14" height="7" rx="1"/>
                                        <path d="M3 3V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1"/>
                                        <circle cx="4" cy="6.5" r="0.5" fill="white"/>
                                        <circle cx="7" cy="6.5" r="0.5" fill="white"/>
                                        <circle cx="10" cy="6.5" r="0.5" fill="white"/>
                                    </g>
                                </svg>
                                <div class="text-confg">Cambiar contraseña</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mensaje-container">
                    <div>Recuerde que su privacidad es importante para nosotros, si tiene algún problema relacionado a la seguridad de su cuenta puede comunicarse con el <span class="green-text">soporte técnico</span>.</div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

