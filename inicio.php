<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="inicio.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <form method="post">
        
        <header class="header">
            <div class="logo">
                <img src="img/Fiara.png" alt="Logo de fiara">
            </div>
            <nav>
                <ul class="nav-links">
                </ul>
            </nav>
            <a href="#" class="menu"><button>LOGIN</button></a>
        </header>

        <div class="container">
            <center>
                <h1 style="text-shadow: 0 5px 10px;">INICIO DE SESION</h1>
                <br>
                <p>Escribe tu usuario: </p>
                <p><input type="text" name="user" value="" class="cuadro-txt"></p>
                <p>Escribe tu contraseña: </p>
                <p><input type="password" name="pass" value="" class="cuadro-txt"></p>
                <br>
                <p><input type="submit" name="" value="Entrar" id="boton1"></p>
                <br>
                <a href='Registro.php' class="Registro"> No tienes cuenta... Registrate¡ </a>
            </center>
        </div>

        <?php

        require "Conexion.php";

        $base = mysqli_query($Conected, "SELECT * FROM inicio WHERE Usuario = '{$_REQUEST['user']}' AND Contraseña = '{$_REQUEST['pass']}'");
        $ShowData = mysqli_num_rows($base);

        if ($ShowData == 1) {
            if ($ShowData == 1) {
                $_SESSION['user'] = $nombre;
                header("location: Menu.php");
                exit();
            } else if ($ShowData == 0) {
                echo "<script>alert('Usuario no existe');window.location= 'index.php' </script>";
            }
        }

        echo "";

        ?>

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
    </form>

</body>

</html>