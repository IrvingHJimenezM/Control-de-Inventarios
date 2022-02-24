<?php

include('db.php');

if (isset($_POST['GuardarEquipo'])) {
  $Nombre = $_POST['Nombre'];
  $Des = $_POST['Descripcion'];
  $Ref = $_POST['Referencia'];
  $Depto = $_POST['Departamento'];
  $UPortador = $_POST['UsuarioPortador'];
  $USistema = $_POST['UsuarioSistema'];
  $Stock = $_POST['Stock'];
  $TEquipo = $_POST['TipoEquipo'];
  $EActual = $_POST['Estado'];
  $query = "INSERT INTO equipos(Nombre, Descripcion, Referencia, Departamento, UsuarioPortador, UsuarioSistema, Stock, TipoEquipo, EstadoActual) VALUES ('$Nombre','$Des', '$Ref', '$Depto', '$UPortador','$USistema', '$Stock', '$TEquipo', '$EActual')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Equipo Agregado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
