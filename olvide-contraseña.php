<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/cambiar-contraseña.css">
    <title>Olvide contraseña</title>
</head>
<body>
    <!--Modal para introducir el correo para recuperar la contraseña-->
    <div class="back-dark4" id="cambiar-contraseña-configuracion">
        <div class="change-password-container">
            <form action="post">
                <div class="container-text-t">
                    <div class="normal-t">Ingresa tu correo para enviar un link de validacion</div>
                    <div class="green-t">introduce correo</div>
                </div>
                <div class="input-container-t">
                    <input type="text" id="mail-forget-password" required>
                    <div class="hide-red-text" id="hide-red-tex2">Campo vacio, por favor ingresar un correo</div>
                </div>
                <div class="send-mail-container">
                    <div class="send-mail">Volver a enviar</div>
                </div>
                <div class="button-container-t">
                    <button class="close-button-t" id="close-modal">Atras</button>
                    <button  class="confirm-button-t" id="confirm-button-t" type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/scripts-crear-noticas.js"></script>
</body>
</html>