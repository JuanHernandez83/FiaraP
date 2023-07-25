<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="FiaraEmpleados.css">
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
        <a href="#" class="menu"><button>EMPLEADOS</button></a>
    </header>

    <div class="text-center">
        <div class="d-flex flex-column flex-md-row justify-content-start">
            <div class="button-container" style="margin-right: 5px;">
                <input type="button" value="Agregar" onclick="location.href = 'FiaraVerEmpleado.php'" style="border-width:3px ; border-color:white; border-style:solid;" id="boton1">
            </div>
            <div class="button-container" style="margin-right: 5px;">
                <input type="button" name="" value="Ver Empleados" onclick="location.href = 'FiaraVerEmpleado.php'" id="boton1">
            </div>
            <div class="button-container">
                <input type="button" name="" value="Editar Empleados" onclick="location.href = 'EmpleadoEditar.php'" id="boton1">
            </div>
        </div>
    </div>

    <br>
    <center>
        <h3 id="txt-R">REGISTRO DE EMPLEADOS</h3>
    </center>



    <div class="container">
        <div class="row flex-column flex-md-row justify-content-evenly">
            <div class="col-md-6">
                <form action="CapturaE.php" method="post">
                    <p>Id empleado:</p>
                    <p> <input type="text" name="idE" value="" class="cuadro-txt"> </p>
                    <p>Nombre del Empleado: </p>
                    <p><input type="text" name="nomE" value="" class="cuadro-txt"> </p>
                    <p>Apellido del Empleado: </p>
                    <p><input type="text" name="apE" value="" class="cuadro-txt"> </p>
            </div>
            <div class="col-md-4">
                <p>Numero del empleado: </p>
                <p><input type="text" name="numE" value="" class="cuadro-txt"> </p>
                <p>Estado: </p>
                <p><input type="text" name="Es" value="" class="cuadro-txt"> </p>
            </div>
            </form>
        </div>
        <center>
            <p> <input type="submit" name="Generar" value="Registrar" id="boton1"> </p>
        </center>
    </div>
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