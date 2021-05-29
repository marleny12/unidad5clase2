<?php
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];

include "conexion.php";
//$conexion = mysqli_connect("localhost","root","","sistema");

session_start();
$SESSION["usuario"]=$usuario;

$query="select * from usuarios where usuario = '$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($db,$query);

$registro = mysqli_num_rows($resultado);

if($registro){

    header("location: bienvenido.php");
}

else{
    echo "<h1> Error de autentificacion</h1>";
}

mysqli_close($db);
?>