<?php
include 'modelo/con_db.php';

$consulta = "SELECT * FROM `plantel`";
$respuesta = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($respuesta);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/css.css" />
  <title>Planteles - Kevin Gabriel Rodriguez</title>
</head>

<?php
include 'navbar_titular.php';
?>

<!---
 <nav class="navbar" style="background-color: #79B530;">
//contenido de barra de navegacion
   <div class="container">
     <a class="navbar-brand" href="index.php" class="logo">
       <img src="https://0201.nccdn.net/4_2/000/000/046/6ea/LogoConalepTabasco-Horiz.jpg#RDAMDAID27061963" alt="" width="120" height="45">
     </a>
   </div>
 </nav>

--->



<body>
  <!--Tabla de consulta de planteles-->
  <div class="contenedor-fuera" style="padding-left:10%;">
    <div class="container mt-4">
      <h2>Informacion Sobre los Planteles</h2>
      <p>

      </p>
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Clave</th>
            <th>Nombre</th>

          </tr>
        </thead>

        <?php while ($fila = mysqli_fetch_array($respuesta)) {  ?>
          <tbody>
            <tr>
              <td><?php echo $fila[0]; ?></td>
              <td><?php echo $fila[2]; ?></td>
              <td><?php echo $fila[1]; ?></td>

            </tr>
          </tbody>
        <?php  }  ?>

      </table>
    </div>
  </div>
</body>

</html>