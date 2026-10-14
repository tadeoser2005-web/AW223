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
    echo "Mensaje guardado correctamente";
} else {
    echo "Error al guardar el mensaje: " . $stmt->error;
}

$stmt->close();
$conexion->close();
