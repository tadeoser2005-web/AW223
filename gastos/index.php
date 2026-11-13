<?php
include 'conexion.php';
//Aqui verificamos que el form se haya enviado por el metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $concepto = $_POST['concepto'];//lo de dentro del post hace referencia a lo enviado en el input del form
    $monto = $_POST['monto']; //<input type ="text" name="marca" required
    $categoria = $_POST['categoria'];
    $sql = "INSERT INTO gastos (concepto, monto,categoria) VALUES ('$concepto','$monto','$categoria')";

    //los azules son los campos de la bd y lo q esta en values son las variables q acabamos de crear


    if (mysqli_query($conexion, $sql)) {  //mysqli es la funcion mensajera
        //sql es la insercion q armamos
        echo "Gasto registrado correctamente";
    } else {
        echo "Error en el registro del gasto";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Control de gastos personales</title>
</head>
<body>
<h1>Control de gastos personales</h1>

<main>
<form class="formulario" action="index.php" method="post">
    <h1>Registro nuevo gastos</h1>
    <input type="text" name="concepto" placeholder="concepto" aria-label="Concepto" required>
    <input type="text" name="monto" placeholder="monto" aria-label="monto" required>
    <input type="text" name="categoria" placeholder="categoria" aria-label="categoria" required>
    <button type="submit">Registrar gasto</button>

</form>

    <table>
        <thead>
        <tr>
            <th>Concepto</th>
            <th>Categorias</th>
            <th>monto</th>
            <th>fecha</th>
            <th>estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>


        </tbody>
    </table>

</main>
</body>
</html>