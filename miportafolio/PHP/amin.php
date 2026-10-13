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
        <a href="/AW223/miportafolio/index.html" class="seccion-contenido">🏠</a>
    </header>

<div class="contenedor-proyecto">
     <h3>Mensajes recibidos</h3>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tadeo</td>
                    <td>tadeoser2005@gmail.com</td>
                    <td>GGS NEXT</td>
                    <td class="opciones">
                        <a href="../PHP/editar.php? id=1" title="Editar">✏️</a>
                        <a href="../PHP/borrar.php? id=1" title="Borrar">🗑️</a>

                    </td>
                </tr>
            <tr>
                <td>2</td>
                <td>Messi</td>
                <td>Messi@gmail.com</td>
                <td>Que mira bobo</td>
                <td class="opciones">
                    <a href="../PHP/editar.php? id=1" title="Editar">✏️</a>
                    <a href="../PHP/borrar.php? id=1" title="Borrar">🗑️</a>
            </tr>
            </tbody>
        </table>
</div>
    <footer>
        <p>2026 Mi portafolio web </p>
        <p>Practica de programacion web, todos los derechos reservados</p>
    </footer>
</body>
</html>