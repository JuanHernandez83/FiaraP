<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Registro.css" rel="stylesheet">
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

    <center>
        <h3 id="txt-R">REGISTO DE USUARIOS</h3>
    </center>

    <div class="container">
        <div class="row flex-column flex-md-row justify-content-evenly">
            <div class="col-md-6">
                <form action="CapturaR.php">
                    <p>Escriba su Email</p>
                    <p><input type="text" name="email" value="" class="cuadro-txt" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width: 342px;" required></p>
                    <p>Escribe tu Usuario</p>
                    <p><input type="text" name="user" value="" class="cuadro-txt" required> </p>
                    <p>Escribe tu Contraseña</p>
                    <p><input type="password" name="pass" value="" class="cuadro-txt" required> </p>
                    <p>Nombres</p>
                    <p><input type="text" name="nombres" value="" class="cuadro-txt" required> </p>
                    <p>Apellidos</p>
                    <p><input type="text" name="apellidos" value="" class="cuadro-txt" required> </p>
            </div>
            <div class="col-md-4">
                <p>Telefono</p>
                <p><input type="text" name="telefono" value="" class="cuadro-txt" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width:342px;" required> </p>
                <p>Nombre del Taller</p>
                <p><input type="text" name="nombretaller" value="" class="cuadro-txt" required> </p>
                <p>Tamaño del Taller</p>
                <select name="tamañodeltaller" class="cuadro-txt" style="width: 342px;" required>
                    <option value="Pequeño">Pequeño</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Grande">Grande</option>
                </select>
                <p style="padding-top: 21px;">NIT</p>
                <p><input type="text" name="nit" value="" class="cuadro-txt" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width:342px;" required> </p>
                <p>Identificacion</p>
                <p><input type="text" name="identificacion" value="" class="cuadro-txt" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; width:342px;" required> </p>
            </div>
            <center>
                <p><input type="submit" name="Crear" value="Crear" id="boton1"></p>
                <p><input type="button" value="Login" onclick="location.href = 'inicio.php'" id="boton1"></p>
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
                    Copyright 2023 All rights reserver | This template is mode with <span class="span-subtitulo">By Juan Hernandez</span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>