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

        <tbody>
        <!-- Filas de datos de equipos -->
        <?php //aqui incrustaremos el codigo php

        //resultado es la variable q guarda la consulta
        //en el select traemos todos los datos de los equipos

        $resultado = mysqli_query($conexion, "SELECT * FROM gastos");

        //mysqli_fetch_assoc es la funcion q trae los valores
        //le decimos q traiga los valores con la consulta q esta en resultado, y eso lo guarde en la variable row

        while ($row = mysqli_fetch_assoc($resultado)) {

            //creo q lo de dentro del row hace referencia a el campo en la bd

            echo "<tr>";

            echo "<td>" . $row['concepto'] . "</td>";
            echo "<td>" . $row['categoria'] . "</td>";
            echo "<td>" . $row['monto'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "<td>" . $row['pagado'] . "</td>";echo "<td class='opciones'>";
            echo "<a href='' title='Editar'>Marcar pagado</a> ";
            echo "</td>";
        }
        ?>

        </tbody>
    </table>

</main>
</body>
</html>