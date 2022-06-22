<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $correo  = $_POST['correo'];
 $contraseña = $_POST['contraseña'];

$insertar = "INSERT INTO clientes VALUES ('$nombre','$correo','$contraseña') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('Se registró de correctamente');
    location.href = '../registro.html';
   </script>";

}else{
    echo "<script> alert('incorrecto, hay un error');
    location.href = '../registro.html';
    </script>";
}






?>