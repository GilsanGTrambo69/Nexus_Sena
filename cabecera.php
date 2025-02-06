<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/configuracion.css">
    <title>Cabecera</title>
</head>
<body>
    <header class="header">
        <div class="header-front">
            <div class="logo-sena">
                <a href="Inicio.php"><img src="./assets/img/logo-sena.png" alt="Logo-sena"></a>
            </div>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Buscar">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
            </div>
            
            <div class="notifications" id="notifications">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                </svg>
                <div class="notification-dot"></div>
            </div>
            <div class="notificacion-bar" id="notificacion-bar">
                <div class="marcar-notificacion">Marcar todo como leido</div>
                <br>
                <div class="notificacion-container">
                    <div class="notificacion-user">
                        <div class="user-info-notificacion">
                            <!--Informacion del usuario en el comentario-->
                            <div class="profile-picture-notificacion">
                                <img src="./assets/img/foto-perfil.png" alt="foto de perfil">
                            </div>
                            <div class="user-info-noti">
                                <div class="nombre-usurio-notificacion">Sena oficial</div>
                                
                                <div class="tipo-notificacion">Tipo de notificacion</div>
                            </div>
                            <div class="right-text">Hora</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-profile" id="user-name">
                <span class="user-name" >Alejandro</span>
                <div class="profile-picture">
                    <img class="foto-perfil" src="./assets/img/foto-perfil.png" alt="">
                    <div class="user-opc" id="user-opc">
                        <a href="miMuro.php"><button class="user-opc-b">Mi muro</button></a>
                        <a href="Configuracion.php"><button class="user-opc-b">Configuracion</button></a>
                        <a href="#"><button class="user-opc-sesion">Cerrar sesion</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Script para abrir barra de perfil y de notificaciones:-->
    <script src="js/scripts-ver-perfil.js"></script>
    
</body>
</html>