<?php

require "Conexion.php";


mysqli_query($Conected, "INSERT INTO inicio(Usuario, Contraseña, Email, Nombres, Apellidos, Telefono, NombreTaller, TamañoTaller, NIT, Identificacion) 
VALUES ('{$_REQUEST['user']}','{$_REQUEST['pass']}','{$_REQUEST['email']}','{$_REQUEST['nombres']}','{$_REQUEST['apellidos']}','{$_REQUEST['telefono']}',
'{$_REQUEST['nombretaller']}','{$_REQUEST['tamañodeltaller']}','{$_REQUEST['nit']}','{$_REQUEST['identificacion']}')") or
    die("error al registrarse" . mysqli_error($Conected));


mysqli_close($Conected);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CapturaR.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
        <a href="#" class="menu"><button>REGISTRO</button></a>
    </header>

    <div class="container">
        <center>
            <h3 class="txt-E" style="padding-bottom: 50px;">REGISTRO EXITOSO</h3>
            <img src="img/Group_7-removebg-preview.png" alt="">
            <br>
            <h3 class="txt-E" style="padding-top:50px; padding-bottom:50px;">Ya puedes iniciar sesion.</h3>
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
