<?php

require 'Conexion.php';

var_dump($_FILES['Ob']);

$nombre = $_POST['placa'];
$imagen = addslashes(file_get_contents($_FILES['Ob']['tmp_name']));



mysqli_query($Conected, "INSERT INTO ordenes (Falla, Zona_de_trabajo, Grado_daño, Trabajo_a_realizar, Observaciones, fecha_de_entrada, Placa, ClienteAtendido) VALUES (
'{$_REQUEST['falla']}' , '{$_REQUEST['Zonat']}','{$_REQUEST['Gradodanio']}' , '{$_REQUEST['TrabajoR']}' ,'$imagen','{$_REQUEST['fecha']}', '{$_REQUEST['placa']}', '{$_REQUEST['clienteAtendido']}')") or die
    ("problema en el select" . mysqli_error($Conected));

    echo mysqli_error($Conected);

mysqli_close($Conected);



echo "<br>Orden realizada con exito";
header("location: Menu.php");









?>