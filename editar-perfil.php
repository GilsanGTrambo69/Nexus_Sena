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
        .page-container {
            grid-template-areas:
            "header header"
            "main main";
        }
        
    </style>
</head>
<body>
    <div class="page-container">
        <!-- Header -->
        <header class="header">
            <?php
                require 'cabecera.php';
            ?>
        </header>
        


        <!-- Sidebar -->
        
        <?php
            require 'sidebar.php';
        ?>

        <!-- Main Content -->
        <main class="main-content">
            <div class="all-post">
                <form action="#">
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
                                <div class="titulo-informacion">Domicilio:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-1">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="Domicilio-input" placeholder="-" value="">
                            </div>
                        </div>
        
                        <div class="informacion-detalle">
                            <div class="fila">
                                <div class="titulo-informacion">Fecha de nacimiento:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-2">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="fecha-nacimiento-input" placeholder="-" value="">
                            </div>
                        </div>
                        
                        <div class="informacion-detalle">
                            <div class="fila">
                                <div class="titulo-informacion">Empelo:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-3">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="empleo-input" placeholder="-" value="">
                            </div>
                        </div>
        
                        <div class="informacion-detalle">
                            <div class="fila">
                                <div class="titulo-informacion">Gustos:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-4">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="gustos-input" placeholder="-" value="">
                            </div>
                        </div>
                    </div>
        
                    <div class="informacion-usuario">
                        <div class="fila">
                            <div class="titulo">Otra informacion</div>
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
        
                        <div class="informacion-detalle">
                            <div class="fila">
                                <div class="titulo-informacion">Genero:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-6">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="genero-input" placeholder="-" value="">
                            </div>
                        </div>
                        
                        <div class="informacion-detalle">
                            <div class="fila">
                                <div class="titulo-informacion">Orientacion sexual:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-7">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="orientacion-input" placeholder="-" value="">
                            </div>
                        </div>
        
                        <div class="informacion-detalle">
                            <div class="fila">
                                <div class="titulo-informacion">Discapacidad:</div>
                                <select class="menu-desplegable" name="" id="opc-informacion-8">
                                    <option class="option" value="todos">Todos</option>
                                    <option value="nadie">Nadie</option>
                                    <option value="solo-yo">Solo Yo</option>
                                </select>
                            </div>
                            <div class="fila">
                                <input type="text" name="" id="discapacidad-input" placeholder="-" value="">
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-fijo">
                        <center>
                            <div class="text">Guardar cambios realizados</div>
                            <br>
                            <div>
                                <button class="button-cancelar">Cancelar</button>
                                <button class="button-guardar">Guardar</button>
                            </div>
                        </center>
                        
                    </div>
                </form>
        </div>
    </main>
    <!--Eliminar post confirmacion-->

    <!--Modal para cambiar la foto de perfil-->
    <div class="cambiar-foto-back" id="cambiar-back1">
        <div class="cambiar-foto">
            <span class="titulo">Foto de perfil</span>
            <br>
            <br>
            <input type="file" name="fileInput1" id="fileInput1" class="input-file1">
            <label for="fileInput1" class="file-label1">Adjuntar archivo</label>
            <center>
                <div class="file-preview2" id="filePreview1"></div>
                <br>
                <button class="button-guardar">Guardar</button>
            </center>        
        </div>
    </div>
    
    <!--Modal para cambiar la foto de Portada-->
    <div class="cambiar-foto-back" id="cambiar-back2">
        <div class="cambiar-foto">
            <span class="titulo">Foto de perfil</span>
            <br>
            <br>
            <input type="file" name="fileInput2" id="fileInput2" class="input-file1">
            <label for="fileInput2" class="file-label1">Adjuntar archivo</label>
            <center>
                <div class="file-preview2" id="filePreview2"></div>
                <br>
                <button class="button-guardar">Guardar</button>
            </center>        
        </div>
    </div>
    

    <!--Vista previa-->
    <script src="js/scripts-editar-perfil.js?v=1.0"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

