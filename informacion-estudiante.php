<?php
include 'modelo/con_db.php';
$consulta = "SELECT * FROM `estudiante`";
$respuesta = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($respuesta);
?>
<!DOCTYPE html>
<html lang="es">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/css.css">
  <title>Estudiantes en Tutoria - CONALEP TABASCO</title>
</head>


<?php

include 'navbar_titular.php';
?>

<body>

  <div class="container mt-3">
    <h2>Informacion Sobre los Estudiantes en Tutoria</h2>
    <p>
    </p>
    <table class="table table-dark table-hover" style="font-size: 12px;">
      <thead>
        <tr>
          <th>No.</th>
          <th>Matricula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Domicilio</th>
          <th>Carrera</th>
          <th>Grupo</th>
          <th>CURP</th>
          <th>Fecha de Nacimiento</th>
          <th>Sexo</th>
          <th>Telefono</th>
          <th>Email</th>
        </tr>
      </thead>
      <?php while ($fila = mysqli_fetch_array($respuesta)) {  ?>
        <tbody>
          <tr>
            <td><?php echo $fila[0]; ?></td>
            <td><?php echo $fila[1] ?></td>
            <td><?php echo $fila[2] ?></td>
            <td><?php echo $fila[3] ?></td>
            <td><?php echo $fila[4] ?></td>
            <td><?php echo $fila[5] ?></td>
            <td><?php echo $fila[6] ?></td>
            <td><?php echo $fila[7] ?></td>
            <td><?php echo $fila[8] ?></td>
            <td><?php echo $fila[9] ?></td>
            <td><?php echo $fila[10] ?></td>
            <td><?php echo $fila[11] ?></td>
          </tr>
        </tbody>
      <?php  }  ?>
    </table>
  </div>
  </div>
</body>

</html>e