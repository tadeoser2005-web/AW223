<?php
    // Código para mostrar el formulario de registro
require_once  "../conexion.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$coreo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$query = "UPDATE mensaje SET nombre = '$nombre', correo = '$coreo', mensaje = '$mensaje' WHERE id = $id";
if (mysqli_query($conexion, $query)) {
    header("Location:/AW223/miportafolio/index.php?estadophp=actualizado");
    exit();
} else {
    echo "Error al actualizar";
}