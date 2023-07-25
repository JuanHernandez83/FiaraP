<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Menu.css">
</head>

<body>


    <header class="header">
        <div class="logo">
            <img src="img/Fiara.png" alt="Logo de fiara">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">PERFIL</a></li>
                <li><a href="#">LOGIN</a></li>
                <li><a href="#">AYUDA</a></li>
            </ul>
        </nav>
        <a onclick="openNav()" href="#" class="menu"><button>MENU</button></a>

        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="#">PERFIL</a>
                <a href="#">LOGIN</a>
                <a href="#">AYUDA</a>
            </div>
        </div>
    </header>


    <center>
        <h1 id="letra">Menu para realizar operaciones</h1>
    </center>
    <br>
    <br>
    <br>
    </center>
    <form action="" method="post">



        <div class="container">

            <h1 class="heading">Seleccione la operacion que desea realizar</h1>

            <div class="box-container">

                <div class="box">
                    <img src="img/pexels-artem-podrez-8985665.jpg" alt="Generar ordenes">
                    <h3>ORDENES</h3>
                    <p>Genera ordenes de un vehiculo apunto de entrar al taller si sus datos fueron previamente registrados para consulta</p>
                    <p> <input type="button" value="ORDENES" onclick="location.href = 'FiaraOden1.php'" id="boton1" class="icon1"> </p>
                </div>

                <div class="box">
                    <img src="img/pexels-mike-bird-190537.jpg" alt="Registrar vehiculos">
                    <h3>VEHICULOS</h3>
                    <p>Registre vehiculos para llevar su historial y generar ordenes con los datos del automotor que entrara a mantenimiento</p>
                    <p> <input type="button" value="VEHICULOS" onclick="location.href = 'FiaraVehiculos.php'" class="icon2" id="boton1"> </p>
                </div>

                <div class="box">
                    <img src="img/pexels-andrea-piacquadio-3846042.jpg" alt="Empleados">
                    <h3>EMPLEADOS</h3>
                    <p>Lleva un control de tus empleados segun el trabajo que estan realizando y su estado en el taller ademas de sus datos</p>
                    <p> <input type="button" value="EMPLEADOS" onclick="location.href = 'FiaraEmpleados.php'" class="icon3" id="boton1"> </p>
                </div>

                <div class="box">
                    <img src="img/pexels-thisisengineering-3912983.jpg" alt="Generar Facturas">
                    <h3>FACTURAS</h3>
                    <p>Consulta facturas de trabajos ya realizados como prueba para el cliente como consultas y evidencia realizada</p>
                    <p> <input type="button" value="FACTURAS" onclick="location.href = 'Facturas.php'" class="icon4" id="boton1">
                </div>

                <div class="box">
                    <img src="img/pexels-mídia-4116232.jpg" alt="Registrar Zonas">
                    <h3>ZONAS</h3>
                    <p>Registra y lleva el control de la zonas de tu taller y que vehiculo lo esta ocupando ademas de asignarle su utilidad</p>
                    <p> <input type="button" value="ZONAS" onclick="location.href = 'FiaraZonas.php'" class="icon5" id="boton1"></p>
                </div>

                <div class="box">
                    <img src="img\pexels-d_vaughn-bell-2068664.jpg" alt="Registrar Clientes">
                    <h3>CLIENTES</h3>
                    <p>Registra a tus clientes para conocer sus visitas al taller y consultar datos de contacto con su correpondiente vehiculo</p>
                    <p> <input type="button" value="CLIENTES" onclick="location.href = 'FiaraClientes.php'" class="icon6" id="boton1"></p>
                </div>

                <div class="box">
                    <img src="img/pexels-victor-terrell-11338401.jpg" alt="Historial Vehicular">
                    <h3>HISTORIAL</h3>
                    <p>Consulta el historial vehicular de cada vehiculo que ha entrado al taller por mantenimiento</p>
                    <p> <input type="button" value="HISTORIAL" onclick="location.href = 'FiaraHistorial.php'" class="icon7" id="boton1"></p>
                </div>

                <div class="box">
                    <img src="img/pexels-pixabay-162553.jpg" alt="Tipo de trabajo">
                    <h3>TRABAJO</h3>
                    <p>Lleva en orden los tipos de trabajo que se realizan dentro del taller para cada empleado</p>
                    <p> <input type="button" value="TRABAJO" onclick="location.href = 'FiaraTipoTrabajo.php'" class="icon8" id="boton1"></p>
                </div>

            </div>

        </div>

    </form>
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
                <p class="titulo-footer">
                    Copyright 2023 All rights reserver | This template is mode with <span class="span-subtitulo">By Juan Hernandez</span>
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="Menu.js"></script>

</body>

</html>