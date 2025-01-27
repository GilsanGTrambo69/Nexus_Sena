<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear publicacion</title>
</head>
<body>
    <div class="back-dark" id="back-dark">
        <!--modal de crear una publicacion-->
        <div class="create-post" id="create-post">
            <h2>Nueva publicacion</h2>
            <br>
            <form action="#">
                <div>
                    <input type="file" name="fileInput" id="fileInput" class="input-file" multiple>
                    <label for="fileInput" class="file-label">Adjuntar archivo</label>
                    <button class="button-modal-create">Ubicacion</button>
                    <button class="button-modal-create">Mencionar amigo</button>
                </div>
                <br>
                <div class="ubicacion-container">
                    <img src="./assets/img/Ubicacion.png" alt="">
                    <input class="input-ubicacion" type="text" name="" id="input-ubicacion" placeholder="...">
                </div>
                <div class="create-container">
                    <textarea class="text-post" name="" id="text-post" placeholder="Escribe aqui..." maxlength="1000"></textarea>
                    <!--Contenedor de la vista previa de imagenes-->
                    <div class="file-preview" id="filePreview"></div>
                </div>
                <br>
                <div class="button-left">
                    <button class="cancelar-button" id="cancelar-button">Cancelar</button>
                    <button class="publicar-button">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>