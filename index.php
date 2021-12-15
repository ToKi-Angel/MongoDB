<?php
require_once "clases/Crud.php";
$obj = new Crud();
$datos = $obj->mostrar();


?>

<?php require_once "header.php"; ?>
<div class="jumbotron-responsive mt-4 jumbotron-fluid">
  <div class="container" >
    <h1 class="display-4 text-center ">CRUD con PHP y MongoDB</h1>
    <p class="lead">
      <a href="agregar.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Agregar persona</a>
      <hr>

      <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered">
          <thead>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha De Naciemiento</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>
          <tbody>

            <?php foreach ($datos as $key) :
              $idMongo = new MongoDB\BSON\ObjectId($key->_id);
            ?>
              <tr>
                <td><?php echo $key->nombre; ?></td>
                <td><?php echo $key->paterno; ?></td>
                <td><?php echo $key->materno; ?></td>
                <td><?php echo $key->fecha_nacimiento; ?></td>
                <td>
                  <form action="actualizar.php" method="POST">
                    <input type="text" name="idActualizar" hidden value="<?php echo $idMongo ?>">
                    <button class="btn btn-warning"><i class="far fa-edit"></i> Editar</button>
                  </form>
                </td>
                <td>
                  <form action="eliminar.php" method="POST">
                    <input type="text" name="_id" hidden value="<?php echo $idMongo ?>">
                    <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Eliminar</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </p>
  </div>
</div>

<?php require_once "scripts.php"; ?>