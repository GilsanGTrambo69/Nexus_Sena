<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/crear-encuesta.css">
    <title>Crear publicacion</title>
</head>
<body>
    <div class="back-dark" id="back-crear-encuesta">
        <!--modal de crear una publicacion-->
        <div class="crear-encuesta-modal" id="crear-encuesta">
            <h2>Crear Encuesta</h2>
            <br>
            <form action="#">
                <div>
                    <div class="opc-options">
                        <div class="titulo-encuesta">
                            <input id="titulo-encuesta" value="" type="text" placeholder="Titulo de la encuesta">
                        </div>
                        <div id="opciones-container">
                            <div class="input-container-e">
                            </div>
                        </div>
                    </div>
                    <!--este es el boton para agregar otra opcion en la encuesta-->
                    <div class="btn-añadir-container">
                        <button id="agregar-opcion" type="button">Añadir una opcion</button>
                    </div>
                </div>
                <div class="button-left">
                    <button class="cancelar-button" id="cancelar-encuesta" type="button">Cancelar</button>
                    <button class="publicar-button">Publicar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/scripts-crear-encuesta.js"></script>
</body>
</html>