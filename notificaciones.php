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
                    <div class="titulo-config">Notificaciones</div>
                    <div class="subtitulo-config">Es posible que Nexus Sena te siga enviando notificaciones importantes sobre tu cuenta y su contenido aunque no coincidan con tu configuración de notificaciones de preferencia</div>
                </div>
                
                <div class="notification-container">
                    <div class="titulo-config">Qué notificacion recibes</div>
                    <form action="#">
                    <div>
                        <label class="custom-checkbox">
                            <input type="checkbox" name="notificaciones" id="">
                            <span class="checkmark"></span>
                            Encuestas
                        </label>
                    </div>
                    </form>
                    
                </div>
                
            </div>
        </main>
    </div>
</body>
</html>

