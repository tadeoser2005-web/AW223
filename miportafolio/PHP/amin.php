<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administracion</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h2>Zona Administracion</h2>
        <p>Mensajes recibidos</p>
        <a href="/AW223/miportafolio/index.php" class="seccion-contenido">🏠</a>
    </header>

<div class="contenedor-proyecto">
     <h3>Mensajes recibidos</h3>

        <table>
            <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            require_once __DIR__ . '/../../consulta_mensajes.php';
            $rsMensajes = consultaMensajes();
            while ($arrMensaje=mysqli_fetch_array($rsMensajes)){


              echo  "<tr>

                    <td>".$arrMensaje['nombre']."</td>
                    <td>".$arrMensaje['correo']."</td>
                    <td>".$arrMensaje['mensaje']."</td>
                    <td>".$arrMensaje['timeStaps']."</td>
                    <td class='opciones'>
                        <a href='../PHP/editar.php' title='Editar'>✏️</a>
                        <a href='../PHP/borrar.php' title='Borrar'>🗑️</a>
                    </td>
                </tr>";
                   }
                   ?>
            </tbody>
        </table>
</div>
    <footer>
        <p>2026 Mi portafolio web </p>
        <p>Practica de programacion web, todos los derechos reservados</p>
    </footer>
</body>
</html>