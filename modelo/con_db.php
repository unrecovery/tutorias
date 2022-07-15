<?php

$user = "root";
$password = "";
$server = "localhost";
$db = "tutorias";

$conexion = mysqli_connect($server, $user, $password) or die("Error en la conexion a la base de datos, Disculpe las molestias :/" . mysqli_connect_error());
mysqli_select_db($conexion, $db);


// Kevin Gabriel Rodriguez Mayo / UNRECOVERY.DZ / DYSTOPIA / DIXBEAT
