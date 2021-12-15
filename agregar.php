<?php require_once "header.php"; ?>


<div class="jumbotron-responsive mt-4 jumbotron-fluid">
  <div class="container ">
    <p>
      <a href="index.php" class="btn btn-outline-info mt-4 "><i class="fas fa-chevron-circle-left"></i> Regresar</a>

    </p>
    <h1 class="display-4 text-center"> Agregar registro nuevo</h1>

    <p class="lead">
    <form action="procesos/agregar.php" method="POST">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
      <label for="paterno">Apellido paterno</label>
      <input type="text" name="paterno" class="form-control" required>
      <label for="materno">Apellido materno</label>
      <input type="text" name="materno" class="form-control" required>
      <label for="fecha_nacimiento">Fecha de nacimiento</label> <i class="far fa-calendar-alt"></i>
      <input type="date" name="fecha_nacimiento" class="form-control" required>
      <br>
      <br>
      <button class="btn btn-outline-primary"><i class="fas fa-plus "></i> Agregar </button>
  
    </form>

    </p>

  </div>
</div>
</body>
<?php require_once "scripts.php"; ?>