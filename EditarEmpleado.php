<?php


require 'Conexion.php';


mysqli_query($Conected, "UPDATE empleados SET nombre_empleado = '{$_REQUEST['nombreE']}', 
apellido_empleado  = '{$_REQUEST['apellidoE']}', numero_empleado = '{$_REQUEST['numeroE']}', 
estado  = '{$_REQUEST['estado']}' WHERE idempleado = '{$_REQUEST['idE']}'");

mysqli_close($Conected);

echo "<br> Datos actualizados con exito";



    ?>

<html>
    <?php

    ?>
</html>