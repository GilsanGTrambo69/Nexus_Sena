<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <link rel="stylesheet" href="./assets/css/mi-muro.css">
    <link rel="stylesheet" href="./assets/css/page-container2.css">
    <title>Perfil de Usuario Completo</title>
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

        .sidebar {
            display: none;
        }
        .sidebar-toggle{
            display: none;
        }
        .header-front{
            background: white;
            border-radius: 50px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    <div class="page-container">
        <!-- Header -->
        <?php
            require 'cabecera.php';
        ?>

        <?php
            require 'sidebar.php';
        ?>

        <!-- Main Content -->
        <main class="main-content">
            <div class="all-post">
                <div class="informacion-usuario">
                    <div class="titulo">Informacion Publica</div>
                    <div class="informacion-detalle">
                        <divc class="fila">
                            <div class="informacion">Foto de Perfil</div>
                            <p class="green-link" id="cambiar-foto">Cambiar Foto</p>
                        </divc>
    
                        <div class="fila">
                            <div class="titulo-informacion">nombre del archivo</div>
                        </div>
                    </div>
                    <div class="informacion-detalle">
                        <divc class="fila">
                            <div class="informacion">Foto de Portada</div>
                            <p class="green-link" id="cambiar-portada">Cambiar Foto</p>
                        </divc>
    
                        <div class="fila">
                            <div class="titulo-informacion">nombre del archivo</div>
                        </div>
                    </div>
                </div>
    
                <div class="informacion-usuario">
                    <div class="fila">
                        <div class="titulo">Informacion Personal</div>
                        <div class="titulo-informacion">Quien puede verlo?</div>
                    </div>

                    <div class="informacion-detalle">
                        <div class="fila">
                            <div class="titulo-informacion">Amigos:</div>
                            <select class="menu-desplegable" name="" id="opc-informacion-5">
                                <option class="option" value="todos">Todos</option>
                                <option value="nadie">Nadie</option>
                                <option value="solo-yo">Solo Yo</option>
                            </select>
                        </div>
                        <div class="fila">
                            <div class="informacion">-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Eliminar post confirmacion-->

    <!--Modal para cambiar la foto de perfil-->
    <div class="cambiar-foto-back" id="cambiar-back1">
        <div class="cambiar-foto">
            <span class="titulo">Foto de perfil</span>
            <br>
            <br>
            <form action="" method="post">
                <div class="input-container">
                    <input type="file" accept=".png, .jpg, .jpeg">
                    <!--input type="file" name="fileInput1" id="fileInput1" class="input-file1">
                    <label-- for="fileInput1" class="file-label1">Adjuntar archivo</label-->
                </div>

                <br>
                <!--Vista previa de los archivos que son seleccionados para la foto de perfil-->
                <div class="file-preview2" id="filePreview1"></div>
                <br>
                <div class="save-container">
                    <button class="button-cancelar" type="button" id="cancelar-1">Cancelar</button>
                    <button class="button-guardar" type="submit">Guardar</button>                
                </div>
            </form>
        </div>
    </div>

    
    <!--Segundo modal-->
    <div class="cambiar-foto-back" id="cambiar-back2">
        <div class="cambiar-foto">
            <span class="titulo">Cambiar fondo de perfil</span>
            <br>
            <br>
            <form action="" method="post">
                <div class="input-container">
                    <input type="file" name="fileInput2" id="fileInput2" class="input-file1" >
                    <label for="fileInput2" class="file-label1">Adjuntar archivo</label>
                </div>

                <br>
                <!--Vista previa de los archivos que son seleccionados para la foto de perfil-->
                <div class="file-preview2" id="filePreview2"></div>
                <br>
                <div class="save-container">
                    <button class="button-cancelar" type="button" id="cancelar-2">Cancelar</button>
                    <button class="button-guardar" type="submit">Guardar</button>                
                </div>
            </form>
        </div>
    </div>

    <!--Vista previa-->
    <script src="js/scripts-editar-perfil.js?v=1.0"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

