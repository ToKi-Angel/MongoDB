<?php
require_once "clases/Crud.php";
$crud = new Crud();
$id = $_POST['idActualizar'];
$datos = $crud->obtenerDocumento($id);
$idMongo = new MongoDB\BSON\ObjectId($datos->_id);
?>


<?php require_once "header.php"; ?>

<div class="jumbotron-responsive mt-4 jumbotron-fluid">
  <div class="container">
    <p>
      <a href="index.php" class="btn btn-outline-info mt-4"><i class="fas fa-undo"></i> Regresar</a>

    </p>
    <h1 class="display-4 text-center">Actualizar un registro </h1>
    <p class="lead">
      <form action="procesos/actualizar.php" method="POST">
        <input type="text" name="idActualizar" value="<?php echo $idMongo; ?>" hidden>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $datos->nombre; ?>" class="form-control" required>
        <label for="paterno">Apellido paterno</label>
        <input type="text" name="paterno" value="<?php echo $datos->paterno; ?>" class="form-control" required>
        <label for="materno">Apellido materno</label>
        <input type="text" name="materno" value="<?php echo $datos->materno; ?>" class="form-control" required>
        <label for="fecha_nacimiento">Fecha de nacimiento</label> <i class="far fa-calendar-alt"></i>
        <input type="date" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento; ?>" class="form-control" required>
        <br>
        <br>
        <button class="btn btn-outline-primary"> <i class="fas fa-pen-square"></i> Actualizar</button>
      </form>
    </p>
  </div>
</div>
<?php require_once "scripts.php"; ?>