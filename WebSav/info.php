<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$sitio = $_POST["sitio"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

echo $nombre." ". $email." ". $telefono." ". $asunto." ". $mensaje;

echo "<script>alert('Se ha registrado los datos del con exito');</script>";
?>