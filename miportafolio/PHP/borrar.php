<?php
// Código para mostrar el formulario de registro
require_once  "../conexion.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM mensaje WHERE id = $id";
    if (mysqli_query($conexion, $query)) {
        header("Location:/AW223/miportafolio/index.php?estadophp=eliminado");
        exit();
    } else {
        echo "Error al eliminar";
    }
} else {
    echo "ID no proporcionado";
}
