<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="FiaraVehiculos.css">
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
        <a href="#" class="menu"><button>VEHICULOS</button></a>
    </header>

    <div class="text-center">
        <div class="d-flex flex-column flex-md-row justify-content-start">
            <div class="button-container">
                <input type="button" value="Agregar" onclick="location.href = 'FiaraVerVehiculos.php'"
                    style="border-width:3px ; border-color:white; border-style:solid;" id="boton1">
            </div>
            <div class="button-container">
                <input type="button" value="Ver vehiculos" onclick="location.href = 'FiaraVerVehiculos.php'"
                    id="boton1">
            </div>
            <div class="button-container">
                <input type="button" value="Editar Vehiculos" onclick="location.href = 'VehiculosEditar.php'"
                    id="boton1">
            </div>
        </div>
    </div>
    <br>
    <center>
        <h3 id="txt-R">REGISTRO DE VEHICULOS</h3>
    </center>


    <div class="container">
        <div class="row flex-column flex-md-row justify-content-evenly">
            <div class="col-md-6">
                <form action="CapturaV.php" method="post">
                    <p> Placa: </p>
                    <p><input type="text" name="Placa" id="" class="cuadro-txt"
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width: 342px;">
                    </p>
                    <p> Vehiculo: </p>
                    <p><input type="text" name="Vehiculo" id="" class="cuadro-txt"></p>
                    <p> Estado: </p>
                    <p><input type="text" name="Estado" id="" class="cuadro-txt"> </p>
                    <p> Motor: </p>
                    <p><input type="text" name="Motor" id="" class="cuadro-txt"
                            style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; width: 342px;">
                    </p>
            </div>
            <div class="col-md-4">
                <p> Marca: </p>
                <p><input type="text" name="Marca" id="" class="cuadro-txt"> </p>
                <p> Modelo: </p>
                <p><input type="text" name="Modelo" id="" class="cuadro-txt"
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width: 342px;">
                </p>
                <p>Tipo: </p>
                <select name="Tipo" id="ti" class="cuadro-txt" style="width: 342px;">
                    <option value="Micro">Micro</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="MPV">MPV</option>
                    <option value="Convertible">Convertible</option>
                    <option value="Wagon">Wagon</option>
                    <option value="Lujo">Lujo</option>
                    <option value="Antiguo">Antiguo</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Deportivo">Deportivo</option>
                    <option value="Super">Super</option>
                    <option value="Muscle">Muscle</option>
                    <option value="Limusina">Limusina</option>
                    <option value="Hibrido">Hibrido</option>
                    <option value="Electrico">Electrico</option>
                    <option value="Diesel">Diesel</option>
                </select> </p>
                <p> Kilometraje:</p>
                <p> <input type="text" name="Kilometraje" id="" class="cuadro-txt"
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width: 342px;">
                </p>
                <br>
            </div>
            <center>
                <p> <input type="submit" value="Registrar" name="Generar" id="boton1"> </p>
            </center>
            </form>
        </div>
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
                    Copyright 2023 All rights reserver | This template is mode with <span class="span-subtitulo">By Juan
                        Hernandez</span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>