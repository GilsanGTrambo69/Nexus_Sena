<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/configuracion.css">
    <title>Editar datos personales</title>
</head>
<body>
    <div class="editar-informacion-back" id="editar-informacion-back">
        <div class="editar-informacion" >
            <form action="#" id="editar-datos-personales-form">
                <div class="titulo-green">Datos personales</div>
                <div class="fila2">
                    <div class="titulo2"></div>
                    <div class="titulo-informacion2">Quien puede verlo?</div>
                </div>

                <div class="informacion-detalle">
                    <div class="fila">
                        <div class="subtitulo-verde">Correo Sena</div>
                        <select class="menu-desplegable" name="" id="opc-informacion-1">
                            <option class="option" value="todos">Todos</option>
                            <option value="nadie">Nadie</option>
                            <option value="solo-yo">Solo Yo</option>
                        </select>
                    </div>
                    <div class="fila2">
                        <div>
                            <div class="text-gray">gilyrodriguez@soy.sena.edu.co</div>
                        </div>
                    </div>
                </div>

                <div class="informacion-detalle2">
                    <div class="fila2">
                        <div class="subtitulo-verde">Correo personal</div>
                        <select class="menu-desplegable" name="" id="opc-datos-personales1">
                            <option class="option" value="todos">Todos</option>
                            <option value="nadie">Nadie</option>
                            <option value="solo-yo">Solo Yo</option>
                        </select>
                    </div>
                    <div class="fila2">
                        <input class="input-datos" type="text" name="" id="Domicilio-input" placeholder="-" value="">
                    </div>
                </div>

                <div class="informacion-detalle2">
                    <div class="fila2">
                        <div class="subtitulo-verde">Numero de telefono</div>
                        <select class="menu-desplegable" name="" id="opc-datos-personales">
                            <option class="option" value="todos">Todos</option>
                            <option value="nadie">Nadie</option>
                            <option value="solo-yo">Solo Yo</option>
                        </select>
                    </div>
                    <div class="fila2">
                        <input class="input-datos" type="number" name="" id="Domicilio-input" placeholder="-" value="">
                    </div>

                    <div class="buttons-container">
                        <button class="cancelar-button"  id="cerrar-editar">Cancelar</button>
                        <button class="publicar-button" id="guardar" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>