<?php

require "Conexion.php";

mysqli_query($Conected, "UPDATE tipo_de_trabajo SET nombre_trabajo = '{$_REQUEST['Nombre']}' 
WHERE idtrabajo = '{$_REQUEST['idT']}'");

mysqli_close($Conected);

echo "Datos guardados con exito";

?>