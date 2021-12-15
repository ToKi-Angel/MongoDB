<?php
require_once "clases/Crud.php";
$crud = new Crud();

$id = $_POST['_id'];

$datos = $crud->obtenerDocumento($id);
$idMongo = new MongoDB\BSON\ObjectId($datos->_id);

?>
<?php require_once "header.php"; ?>

<div class="jumbotron-responsive mt-4 jumbotron-fluid">
  <div class="container ">
    <p>
      <a href="index.php" class="btn btn-outline-info mt-4"><i class="fas fa-arrow-left"></i> Regresar</a>

    </p>
    <h1 class="display-4 text-center">CRUD con PHP y MongoDB</h1>
    <p class="lead-responsive">
    <div class="alert alert-danger text-center" role="alert">
      <h4 class="alert-heading "><i class="fas fa-exclamation-circle"></i> Advertencia <i class="fas fa-exclamation-circle"></i></h4>
      <p>Estas seguro de eliminar este registro!!!.</p>
      <p>
      <table class="table table-hover table-sm table-bordered">
        <thead>
          <th>Nombre</th>
          <th>Apellido paterno</th>
          <th>Apellido materno</th>
          <th>Fecha de naciemiento</th>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $datos->nombre ?></td>
            <td><?php echo $datos->paterno ?></td>
            <td><?php echo $datos->materno ?></td>
            <td><?php echo $datos->fecha_nacimiento ?></td>
          </tr>
        </tbody>
      </table>
      </p>
      <hr>
      <p class="mb-0">
      <form action="procesos/eliminar.php" method="POST">
        <input type="text" hidden name="idEliminar" value="<?php echo $idMongo ?>">
        <button class="btn btn-responsive btn-danger"><i class="fas fa-user-minus"></i> Eliminar</button>
      </form>
      </p>
    </div>
    </p>
  </div>
</div>

<?php require_once "scripts.php"; ?>