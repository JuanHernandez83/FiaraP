<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="FiaraOden1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="img/Fiara.png" alt="Logo de fiara">
        </div>
        <nav>
            <ul class="nav-links">
            </ul>
        </nav>
        <a href="#" class="menu"><button>ORDENES</button></a>
    </header>

    <div class="button-container">
        <input type="button" id="boton1" value="Ver ordenes" onclick="location.href='Mostrar.php'">
        <input type="button" id="boton1" value="Volver al menu" onclick="location.href='Menu.php'">
    </div>

    <center>
        <h1 id="ordenes">GENERA UNA ORDEN</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-sm-6">
                    <div class="col-lg-6">
                        <form action="Captura.php" method="POST" enctype="multipart/form-data">
                            <p> Falla: </p>
                            <p><input type="text" name="falla" id="Fa" class="cuadro-txt"> </p>
                            <p> Zona de Trabajo: </p>
                            <p> <input type="text" name="Zonat" id="Zt" class="cuadro-txt"> </p>
                            <!--  <select  class = 'cuadro-txt'>
                            <p><?php

                                require "Conexion.php";

                                $data = "SELECT id_zona, nombre_zona FROM zonas";

                                $ShowData = mysqli_query($Conected, $data);

                                while ($reg = mysqli_fetch_array($ShowData)) {
                                    echo "<option>{$reg['nombre_zona']}</option>";
                                }

                                ?>

                            <select> -->
                            <p> Grado de daño: </p>
                            <p><input type="text" name="Gradodanio" id="Gd" class="cuadro-txt"> </p>
                            <p> Trabajo a realizar:
                            <p>
                            </p><input type="textarea" name="TrabajoR" id="Tr" class="cuadro-txt"></p>
                            <p>Fecha</p>
                            <p><input type="date" name="fecha" class="cuadro-txt" style="font-family: 'Courier New', Courier, monospace; width:350px"> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-6">
                    <div class="col-lg-6">
                        <p> Obseraviones: </p>
                        <!--                       <div class="custom-file-input">
                            <i class="fa fa-upload"></i>
                            <p><input type="file" name="Ob" id="file-input" class="cuadro-txt-file"></p>
                        </div>  -->
                        <p><input class="form-control" type="file" name="Ob" id="formFileMultiple" multiple style="width: 500px; padding-left:20px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"></p>
                        <p> Placa: </p>
                        <p><input type="text" name="placa" id="pl" class="cuadro-txt"></p>
                        <p> Cliente atendido:</p>
                        <p><input type="text" name="clienteAtendido" class="cuadro-txt"> </p>
                    </div>
                </div>
            </div>

            <center>
                <p><input type="submit" value="Ordenar" name="Generar" id="boton1"></p>
            </center>
        </div>
    </div>
    </form>
    </div>

    <br><br>
    <div id="footer">
        <div class="containers">
            <div class="row">
                <div class="col-md-4">
                    <p class="contacto">
                    </p>
                    <p class="titulo-contacto">
                        <img src="img/Asset1.png" alt="">
                    </p>
                    <p>
                        <i class="fas fa-map-maker-alt" id="localizacion"></i>
                        <span class="ubicacion"></span>
                    </p>

                </div>
                <div class="col-md-4">
                    <p class="contacto">
                        <a href="#" class="titulo-contacto">Nosotros</a>
                    </p>
                    <p class="titulo-contacto">
                        <a href="#" class="titulo-contacto">Contactos</a>
                    </p>
                    <p>
                        <i class="fas fa-map-maker-alt" id="localizacion"></i>
                        <span class="ubicacion"><a href="#" class="titulo-contacto">Terminos y condiciones</a></span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="contacto">
                        <a href="#" class="titulo-contacto">Inicio</a>
                    </p>
                    <p class="titulo-contacto">

                    </p>
                    <p>
                        <i class="fas fa-map-maker-alt" id="localizacion"></i>
                        <span class="ubicacion"></span>
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="fondo-footer">

    </div>
    <div id="p-footer">
        <div class="containers">
            <div class="col-md-12">
                <p class="titulo-footer" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    Copyright 2023 All rights reserver | This template is mode with <span class="span-subtitulo">By Juan
                        Hernandez</span>
                </p>
            </div>
        </div>
    </div>
    <!--      <script type="text/javascript" src="FiaraOden1.js"></script>
 --> <!-- <script src="FiaraOdenOne.js"></script> -->

</body>

</html>