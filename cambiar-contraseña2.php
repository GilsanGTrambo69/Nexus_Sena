<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/cambiar-contraseña.css">
    <title>Cambiar contraseña</title>
</head>
<body>
<div class="back-dark3" id="cambiar-contraseña-configuracion">
        <div class="change-password-container">
            <div class="container-text-t">
                <div class="normal-t">Repcuerar contraseña</div>
                <div class="green-t">Nueva contraseña</div>
            </div>
            <form action="#">
                <div class="inputs-container1">
                    <div class="input-contraseña">
                        <input class="new-password" type="password" type="text" placeholder="Contraseña nueva" id="new-password">
                        <div id="error-new-password" class="hide-red-text">La contraseña nueva debe tener mínimo 8 caracteres</div>
                    </div>
                    <div class="input-contraseña">
                        <input class="renew-password" type="password" placeholder="Repetir contraseña nueva" id="renew-password">
                        <div id="error-renew-password" class="hide-red-text">Las contraseñas no coinciden</div>
                    </div>
                </div>
                <div class="password-chaged-container">
                    <div class="password-changed-text">La contraseña ha sido exitosamente cambiada</div>
                </div >
                <div class="button-container-t">
                    <button type="submit" class="confirm-button-t" id="change-password">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/scripts-cambiar-contraseña.js"></script>
</body>
</html>