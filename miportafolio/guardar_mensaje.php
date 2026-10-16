<?php

require_once ("conexion.php");

/** @var mysqli $conexion */

$nombre = $_POST['txtnombre'] ;
$correo = $_POST['txtemail'] ;
$mensaje = $_POST['txtmensaje'];

$sqlInsert = "INSERT INTO mensaje(nombre,correo,mensaje) VALUES(?,?,?)";

$stmt = $conexion->prepare($sqlInsert);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
    header("Location: index.php?estadophp=exito");
    /*echo "Mensaje guardado correctamente";*/
} else {
    header("Location: index.php?estadophp=error");
    /*echo "Error al guardar el mensaje: " . $stmt->error;*/
}

$stmt->close();
$conexion->close();
