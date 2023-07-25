<?php

$id = $_REQUEST['id_orden'];
var_dump($id);

require "Conexion.php";


$data = "DELETE FROM ordenes WHERE id_orden = $id;";
$ShowData = mysqli_query($Conected, $data);

header("Location : Mostrar.php");


mysqli_close($Conected);


?>