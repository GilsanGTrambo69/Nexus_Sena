<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page-container.css">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/noticias.css">

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
                <!--Contenedor de una Noticia-->
                <div class="back-icon-container">
                    <a href="leer-noticias.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                            <circle class="circle" cx="12" cy="12" r="12" fill="#00d100"/>
                            <g transform="translate(6, 6)" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 6H2"/>
                                <path d="M6 2L2 6l4 4"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="contendor-noticia">
                    <div class="header-noticia">
                        <h2>Titulo de una noticia</h2>
                    </div>
                    <div class="file-noticia">
                        <img src="assets/img/img-noticia.png" alt="">
                    </div>
                    <div class="text-container-noticia">
                        <div class="parrafo">
                            <p>La prueba gratuita de Minecraft: Java Edition está disponible para Windows, Mac y Linux. Antes de iniciar la prueba gratuita, desplázate a la caja gris del medio de la página, selecciona el icono que representa tu dispositivo y sigue las instrucciones para descargar Minecraft.</p>
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