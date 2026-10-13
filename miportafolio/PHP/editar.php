<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Mensaje</title>

    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>


<header>
    <h2>Zona Administracion</h2>
    <p>Formulario para Editar</p>
</header>


<div style="text-align: center; margin: 20px 0; font-size: 24px;">
    <a href="/AW223/miportafolio/index.html" title="Ir al Portafolio" style="text-decoration: none; margin: 0 15px;">🏠</a>
    <a href="../admin.php" title="Regresar a Admin" style="text-decoration: none; margin: 0 15px;">🔄</a>
</div>


<div class="contenedor-proyecto">
    <h3>Editar Mensaje</h3>

    <section>



        <form id="formulario">

            <div class="campo">

                <label for="nombre">
                    Nombre
                </label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Escribe tu nombre"
                >

            </div>

            <div class="campo">
                <label for="correo">
                    correo electronico
                </label>
                <input
                    type="text"
                    id="correo"
                    name="email"
                    placeholder="ejemplo@gmail.com"
                >


            </div>

            <div class="campo">

                <label for="texto-mensaje">
                    Mensaje
                </label>
                <textarea
                    id="texto-mensaje"
                    name="mensaje"
                    rows="5"
                    placeholder="escribe tu mensaje">
</textarea>

            </div>

            <button type="submit">
                Enviar mensaje
            </button>
            <p id="mensaje"></p>

        </form> <!-- formulario -->


    </section>
</div>

<footer>
    <p>&copy; 2026 Mi portafolio web</p>
    <p>Practica de programacion web, todos los derechos reservados</p>
</footer>

</body>
</html>