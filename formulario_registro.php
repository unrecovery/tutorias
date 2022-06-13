<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/css.css" />
  <title>Registro de Estudiantes - CONALEP TABASCO</title>
</head>

<?php
include 'navbar_titular.php';
?>

<body>
  <div class="container p-3">

    <div class="row">
      <div class="col-md-8">
        <h2>Registro de Estudiante para Tutorias</h2>
        <div class="card-body">
          <form action="#" class="form-inline" role="form">
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="nombre" class="col-form-label">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre Estudiante">
              </div>

            </div>
            <div class="form-group col-md-5">
              <label for="curp" class="col-form-label">CURP</label>
              <input type="text" class="form-control" id="curp" placeholder="TOHA530902HSPRRN07">
            </div>
            <div class="form-group">
              <label for="direccion" class="col-form-label">Direccion</label>
              <input type="text" class="form-control" id="direccion" placeholder="Nombre de Calle y Numero de calle">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="City" class="col-form-label">City</label>
                <input type="text" class="form-control" id="City" placeholder="City">
              </div>
              <div class="form-group col-md-4">
                <label for="State" class="col-form-label">State</label>
                <select id="State" class="form-control">
                  <option value="Municipio">Seleccione Municipio</option>
                  <option value="balancan">Balancan</option>
                </select>

              </div>
              <div class="form-group col-md-2">
                <label for="Zip" class="col-form-label">Zip</label>
                <input type="text" class="form-control" id="Zip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>

</body>

</html>

