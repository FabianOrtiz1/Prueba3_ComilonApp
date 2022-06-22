<?php

session_start();
$correo = $_SESSION['username'];

echo "<h1> BIENVENIDO $correo </h1>";


    
?>
