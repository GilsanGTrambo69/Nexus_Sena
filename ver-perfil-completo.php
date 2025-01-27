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
                <div class="profile-container-m">
                    <div class="banner-m">
                        <div class="profile-picture-m">
                            <img src="./assets/img/foto-perfil.png" alt="Foto de perfil">
                        </div>
                    </div>
                    <div class="profile-info-m">
                        <div class="profile-header-m">
                            <div class="name-section-m">
                                <h1 class="name-m"></h1>
                                <p class="role-m"></p>
                            </div>
                            <a href="editar-perfil.php" class="edit-button-m">
                                Editar mi información
                                <svg class="edit-icon-m" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                </svg>
                            </a>
                        </div>                        
                    </div>
                </div>
            <div class="informacion-usuario">
                <div class="titulo">Informacion del Aprediz</div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Nombre:</div>
                    <div class="informacion">Omar Alejandro Galbis Espitia</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Roll:</div>
                    <div class="informacion">Aprendiz - Etapa Lectiva</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Centro de aprendizaje</div>
                    <div class="informacion"> Fusagasuga - Centro Agroecologico Empresarial Quebrajacho</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Programa inscrito</div>
                    <div class="informacion"> Análisis y Desarrollo de Software</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Ficha de programa:</div>
                    <div class="informacion"> ADSO - 2847293</div>
                </div>
            </div>

            <div class="informacion-usuario">
                <div class="titulo">Informacion Personal</div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Domicilio:</div>
                    <div class="informacion">-</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Fecha de  nacimiento:</div>
                    <div class="informacion">-</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Empleo:</div>
                    <div class="informacion">-</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Gustos:</div>
                    <div class="informacion">-</div>
                </div>
            </div>

            <div class="informacion-usuario">
                <div class="titulo">Otra Informacion</div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Amigos:</div>
                    <div class="informacion">-</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Genero:</div>
                    <div class="informacion">-</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Orientacion sexual:</div>
                    <div class="informacion">-</div>
                </div>
                <div class="informacion-detalle">
                    <div class="titulo-informacion">Discapacidad:</div>
                    <div class="informacion">-</div>
                </div>
            </div>
            
        </div>
    </main>
    <!--Eliminar post confirmacion-->

    
    
    <!--Vista previa-->
    <script src="js/scripts.js"></script>
    <script src="js/scripts-miMuro.js"></script>
</body>
</html>

