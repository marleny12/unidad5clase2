<?php
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];

include "conexion.php";
//$conexion = mysqli_connect("localhost","root","","sistema");



//$query="select * from usuarios where usuario = '$usuario' and contraseña='$contraseña'";
$query="Insert into usuarios (usuario, contraseña) values ('$usuario', '$contraseña')";
$resultado = mysqli_query($db,$query);


if($resultado){

    header("location: index.html");
}

else{
    echo "<h1> Error de Registro</h1>";
}

mysqli_close($db);
?>