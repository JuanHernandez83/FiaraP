<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="FiaraHistorial.css">
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
        <a href="#" class="menu"><button>HISTORIAL</button></a>
    </header>

    <div class="text-center">
        <div class="d-flex flex-column flex-md-row justify-content-start">
            <div class="button-container" style="margin-right: 5px;">
                <input type="button" value="Agregar" onclick="location.href = 'FiaraVerEmpleado.php'"
                    style="border-width:3px ; border-color:white; border-style:solid;" id="boton1">
            </div>
            <div class="button-container" style="margin-right: 5px;">
                <p> <input type="button" value="Ver Clientes" onclick="location.href = 'FiaraVerClientes.php' "
                        id="boton1"> </p>
            </div>
            <div class="button-container">
                <p> <input type="button" value="Editar Clientes" onclick="location.href = 'ClientesEditar.php' "
                        id="boton1"> </p>
            </div>
        </div>
    </div>
    <br>
    <center>
        <h3 id="txt-R">HISTORIAL</h3>
    </center>
    <div class="container">
        <div class="row flex-column flex-md-row justify-content-evenly">
            <form action="" method="post">
                <center>
                    <p>Escriba la placa la cual quiera consultar</p>
                    <p><input type="text" name="placa" value="" class="cuadro-txt"
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"></p>
                    <p><input type="submit" name="" value="Consultar" id="boton1"></p>
                </center>
            </form>
            <div class="col-md-6"
                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                <?php
                require "Conexion.php";
                $base = "SELECT * FROM vehiculos
            INNER JOIN ordenes
            ON vehiculos.Placa = ordenes.Placa
            WHERE vehiculos.Placa = '{$_REQUEST['placa']}';";
                $ShowData = mysqli_query($Conected, $base);
                while ($reg = mysqli_fetch_array($ShowData)) {
                    echo "Placa del vehiculo trabajado: " . $reg['Placa'] . "<br>";
                    echo "Motor: " . $reg['Motor'] . "<br>";
                    echo "Marca: " . $reg['Marca'] . "<br>";
                    echo "Modelo: " . $reg['Modelo'] . "<br>";
                    echo "Tipo: " . $reg['Tipo'] . "<br>";
                }
                ?>
            </div>

            <div class="col-md-4"
                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                <?php
                require "Conexion.php";
                $base = "SELECT * FROM vehiculos
            INNER JOIN ordenes
            ON vehiculos.Placa = ordenes.Placa
            WHERE vehiculos.Placa = '{$_REQUEST['placa']}';";
                $ShowData = mysqli_query($Conected, $base);
                while ($reg = mysqli_fetch_array($ShowData)) {
                    echo "Kilometraje: " . $reg['Kilometraje'] . "<br>";
                    echo "Id de orden trabajada: " . $reg['id_orden'] . "<br>";
                    echo "Falla pasada: " . $reg['Falla'] . "<br>";
                    echo "Cliente Atendido: " . $reg['ClienteAtendido'] . "<br>";
                }
                ?>
            </div>

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