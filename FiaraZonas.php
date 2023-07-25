<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="FiaraZonas.css">
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
        <a href="#" class="menu"><button>ZONAS</button></a>
    </header>

    <div class="text-center">
        <div class="d-flex flex-column flex-md-row justify-content-start">
            <div class="button-container">
                <input type="button" value="Agregar" onclick="location.href = 'FiaraVerVehiculos.php'" style="border-width:3px ; border-color:white; border-style:solid;" id="boton1">
            </div>
            <div class="button-container">
                <p> <input type="button" value="Ver Zonas" onclick="location.href = 'FiaraVerZonas.php'" id="boton1"> </p>
            </div>
            <div class="button-container">
                <p> <input type="button" value="Editar Zonas" onclick="location.href = 'ZonasEditar.php'" id="boton1"> </p>
            </div>
        </div>
    </div>
    <br>
    <center>
        <h3 id="txt-R">REGISTRO DE ZONAS</h3>
    </center>

    <div class="container">
        <div class="row flex-column flex-md-row justify-content-evenly">
            <div class="col-md-6">
                <form action="CapturaZ.php" method="post">
                    <p>Id zona: <input type="text" name="idZona" id="" class="cuadro-txt"> </p>
                    <p>Empleado: <input type="text" name="empleado" id="" class="cuadro-txt"> </p>
                    <p>Nombre de la zona: <input type="text" name="nombreZona" id="" class="cuadro-txt"> </p>
            </div>
            <div class="col-md-4">
                <p>Vehiculo: <input type="text" name="vehiculo" id="" class="cuadro-txt"> </p>
                <p>Estado: <input type="text" name="estado" id="" class="cuadro-txt"> </p>
            </div>
        </div>
        <center>
        <p> <input type="submit" value="Registrar" name="Generar" id="boton1"> </p>
        </center>
    </div>
    </form>
    <br><br><br>
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
                <p class="titulo-footer">
                    Copyright 2023 All rights reserver | This template is mode with <span class="span-subtitulo">By Juan Hernandez</span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>