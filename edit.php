<?php
include("db.php");
$Des = '';
$Ref = '';
$Depto = '';
$UPortador = '';
$USistema = '';
$Stock = '';
$TEquipo = '';
$EActual = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM equipos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Des = $row['Descripcion'];
    $Depto = $row['Departamento'];
    $Stock = $row['Stock'];
    $TEquipo = $row['TipoEquipo'];
    $EActual = $row['EstadoActual'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
    $Nombre = $_POST['Nombre'];
    $Des = $_POST['Descripcion'];
    $Depto = $_POST['Departamento'];
    $Stock = $_POST['Stock'];
    $TEquipo = $_POST['TipoEquipo'];
    $EActual = $_POST['Estado'];

  $query = "UPDATE equipos set Nombre = '$Nombre', Descripcion = '$Des',Departamento='$Depto',Stock='$Stock',TipoEquipo='$TEquipo',EstadoActual='$EActual' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Equipo Actualizado Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: Consumibles.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
        <div class="form-group">
            <input type="text" name="Nombre" class="form-control" value="<?php echo $Nombre; ?>"  placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <textarea name="Descripcion" rows="2" class="form-control" placeholder="Descripcion" > <?php echo $Des?> </textarea>
          </div>
          <div class="form-group">
          <select name="Departamento" class="form-control" >
          <option value="<?php echo $Depto; ?>"><?php echo $Depto; ?></option> 
            <option value="Ventanilla">Ventanilla</option> 
            <option value="PROFEPA">PROFEPA</option> 
            <option value="Administrativos">Administrativos</option>
            <option value="Sistemas">Sistemas</option> 
            <option value="Recepcion">Recepcion</option> 
            <option value="SAGARPA">SAGARPA</option> 
            <option value="Salidas">Salidas</option> 
            <option value="Andenes">Andenes</option> 
          </select>
         </div>
          <div class="form-group">
            <input type="number" name="Stock" class="form-control" value="<?php echo $Stock; ?>" placeholder="Stock" autofocus>
          </div>
          <div class="form-group">
          <select name="TipoEquipo" class="form-control" >
            <option value="<?php echo $TEquipo; ?>"><?php echo $TEquipo; ?></option> 
            <option value="Componente PC">Componente PC</option> 
            <option value="Bocinas">Bocinas</option> 
            <option value="Escanner">Escanner</option>
            <option value="Telefonia">Telefonia</option> 
            <option value="Impresora">Impresora</option> 
            <option value="Laptop">Laptop</option> 
            <option value="Componente Laptop">Componente Laptop</option> 
            <option value="Herramienta">Herramienta</option> 
            <option value="Equipo / Pieza de Redes">Equipo / Pieza de Redes</option> 
            <option value="Memoria / Almacenamiento">Memoria / Almacenamiento</option> 
            <option value="UPS / No Break">UPS / No Break</option> 
            <option value="Cableado">Cableado</option> 
            <option value="Consumible">Consumible</option>
            <option value="Otros">Otros</option>  
          </select>
         </div>
         <div class="form-group">
          <select name="Estado" class="form-control" >
            <option value="<?php echo $EActual; ?>"><?php echo $EActual; ?></option>
            <option value="Activo">Activo</option> 
            <option value="Inactivo">Inactivo</option> 
            <option value="Almacen">Almacen</option>
          </select>
         </div>
        <button class="btn-success" name="update">
          Actualizar 
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
