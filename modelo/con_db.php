<?php
//servidor,usuario bd, contra bd,, nombre bd, puerto (en este caso es el 3306, y es la default, por lo tanto no se agrega al final)
$conexion=mysqli_connect("localhost","root","181001","conalep_tutorias");
//condicional de la conexion
if($conexion === false){
  //si esta resulta falsa o negativa por lo tanto es un error que se presenta
    die("Error en la conexion a la base de datos, Disculpe las molestias :/" . mysqli_connect_error());
}
else{
  //si esta resulta posivita por lo tanto es una conexion establecida
    echo'';
}
// Kevin Gabriel Rodriguez Mayo / UNRECOVERY.DZ / DYSTOPIA / DIXBEAT
?>
