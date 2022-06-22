<?php
require 'conexion.php';
session_start();

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$q = "SELECT COUNT(*) as contar from clientes where correo = '$correo ' and contraseña = '$contraseña' ";
$consulta = mysqli_query($conectar,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
    $_SESSION['username'] = $correo;
    header("location: ../principal.php");

}else{
    echo "DATOS INCORRECTOS";

}

?>