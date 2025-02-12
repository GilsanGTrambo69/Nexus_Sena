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
            <button class="create-post-button" id="crear-noticia">Crear una Noticia</button>
                <!--Contenedor de una Noticia-->
                <div class="contenedor-publicacion">
                    
                </div>
            </div>
        </main>
        <!-- Toggle Button -->
        <button class="sidebar-toggle" id="sidebarToggle">☰</button>
    </div>

    <div class="back-dark" id="back-dark5">
        <!--modal de crear una publicacion-->
        <div class="create-notice">
            <h2>Nueva publicacion</h2>
            <br>
            <form action="#">
                <div class="create-post-buttons-container"> 
                    <input type="file" name="fileInput" id="fileInput" class="input-file" multiple>
                    <label for="fileInput" class="file-label">Adjuntar archivo</label>
                </div>
                <br>
                <!--Titulo de las noticias creadas-->
                <h2>Titulo</h2>
                <div class="create-container-titulo">
                    <textarea class="text-post" name="" id="titulo-noticia" placeholder="Escribe aqui..." maxlength="200"></textarea>
                </div>
                <br>
                <!--Subtitulo de las noticias creadas-->
                <h2>Subtitulo</h2>
                <div class="create-container-subtitulo">
                    <textarea name="" id="subtitulo-noticia" class="text-post" placeholder="Subtitulo" maxlength="250"></textarea>
                </div>
                <br>
                <!--Descripcion de las noticas creadas-->
                <h2>Descripción</h2>
                <div class="create-container-descripcion">
                    <textarea name="" id="descripcion-noticia" class="text-post" placeholder="Descripcion" maxlength="2000"></textarea>
                    <!--Contenedor de la vista previa de imagenes-->
                    <div class="file-preview" id="filePreview"></div>
                </div>
                <br>
                <div class="button-left">
                    <button class="cancelar-button" id="close-notice" type="button">Cancelar</button>
                    <button class="publicar-button" type="submit">Publicar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/scripts-crear-noticas.js"></script>
    <script src="js/scripts.js" ></script>

</body>
</html>