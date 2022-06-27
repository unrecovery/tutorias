<?php
//incluimos archivo de conexion a la base de datos
include 'modelo/con_db.php';
session_start();
//declaramos los datos de la pagina login los cuales son dos
$_SESSION['usuario'] = $_POST["usuario"];
$_SESSION['password'] = $_POST["password"];
//declaramos la ejecucion de la funcion inicio para comprobar
$inicio = "SELECT * FROM usuario WHERE usuario='$_SESSION[usuario]'AND password='$_SESSION[password]'";
//aqui vemos si funciono o no
$resultado = mysqli_query($conexion, $inicio);
//aqui hacemos la condicional parani el inicio de sesion
$verifica = mysqli_fetch_array($resultado);
//si la variable count es mayor a 0 significa que si encontro algo
if (!$verifica) {
  //al ser correcta las credenciales, esta dirige a la pagina principal que en este caso es el panel
  echo false;
  session_destroy();
} else {
  //manda una alerta sobre los datos
  echo true;
}
mysqli_free_result($resultado);
mysqli_close($conexion);
    // Kevin Gabriel Rodriguez Mayo / UNRECOVERY.DZ / DYSTOPIA / DIXBEAT
