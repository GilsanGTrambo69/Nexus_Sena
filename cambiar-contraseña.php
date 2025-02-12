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
                    <a href="contraseña-y-seguridad.php">
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
                    <div class="titulo-config">Cambiar contraseña</div>
                    <div class="text-gray2">Nombre de usuario - Nombre del programa y numero de la ficha</div>
                    <div class="subtitulo-config">La contraseña debe tener al menos 8 caracteres y puede incluir una combinación de numero, letras y caracteres especiales (!$@%)</div>
                </div>
                <form action="#">
                    <div class="inputs-container1">
                        <div class="input-contraseña">
                            <input type="password" placeholder="Contraseña actual" id="old-password">
                        </div>
                        <div class="input-contraseña">
                            <input class="new-password" type="password" type="text" placeholder="Contraseña nueva" id="new-password">
                            <div id="error-new-password" class="hide-red-text">La contraseña nueva debe tener mínimo 8 caracteres</div>
                        </div>
                        <div class="input-contraseña">
                            <input class="renew-password" type="password" placeholder="Repetir contraseña nueva" id="renew-password">
                            <div id="error-renew-password" class="hide-red-text">Las contraseñas no coinciden</div>
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="editar-info2" id="forget-password"><span class="editar-info-text2" id="">¿Olvidaste la contraseña?</span></div>              
                        <div class="subtitulo-config">Al cambiar de contraseña se cerrara sesión en otros dispositivos.</div>
                        <div class="ctn-btn">
                            <button id="change-password" class="publicar-button" type="#">Cambiar contraseña</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
        <?php include 'olvide-contraseña.php'; ?>

    <script src="js/scripts-cambiar-contraseña.js"></script>
</body>
</html>

