<?php


require "Conexion.php";

$data = "SELECT * FROM clientes";

$ShowData = mysqli_query($Conected, $data);

while ($Cz = mysqli_fetch_array($ShowData)) {

    echo "<br> Id Cliente: " . $Cz['id_cliente'] . "<br>";
    echo "<br> Nombres: " . $Cz['nombres'] . "<br>";
    echo "<br> Apellidos:" . $Cz['apellidos'] . "<br>";
    echo "<br> Telefono: " . $Cz['telefono'] . "<br>";
    echo "<br> Correo: " . $Cz['correo'] . "<br>";
    echo "<br> Placa: " . $Cz['Placa'] . "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";
}

?>

<html>

<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 --><!--     <link rel="stylesheet" type="" href="FiaraZonas.css">
 -->

<!-- <input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
<input type="button" value="Insertar Datos" onclick="location.href = 'FiaraClientes.php'">
<input type="button" value="Editar Clientes" onclick="location.href = 'ClientesEditar.php'">

<table class="table">
<thead class="table-danger">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

</html>