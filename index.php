<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="GuardarEquipo.php" method="POST">
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <textarea name="Descripcion" rows="2" class="form-control" placeholder="Descripcion"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="Referencia" class="form-control" placeholder="Referencia/Serial/Codigo" autofocus>
          </div>
          <div class="form-group">
            <select name="Departamento" class="form-control">
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
            <input type="text" name="UsuarioPortador" class="form-control" placeholder="Usuario Portador" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="UsuarioSistema" class="form-control"  value ="Irving Jimenez"placeholder="Usuario Sistema" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="Stock" class="form-control" placeholder="Stock" autofocus>
          </div>
          <div class="form-group">
          <select name="TipoEquipo" class="form-control">
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
          <select name="Estado" class="form-control">
            <option value="Activo">Activo</option> 
            <option value="Inactivo">Inactivo</option> 
            <option value="Almacen">Almacen</option>
          </select>
         </div>
          
          <input type="submit" name="GuardarEquipo" class="btn btn-success btn-block" value="Guardar Equipo">
        </form>
      </div>
    </div>
    
  </div>
</main>

<?php include('includes/footer.php'); ?>
