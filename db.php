<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'Inventario'
) or die(mysqli_erro($mysqli));

?>
