<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiPortafolio</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
    <script src="../SCRIPT/script.js" defer></script>
</head>



<body>

    <header>

<h1> Mi Portafolio </h1>   <!-- este es un titulo -->
<p id="texto-bienvenida"> Bienvenido a mi sitio web </p>  <!-- este es un parrafo -->
<button id="boton-cambio"> Presioname </button>
    </header>  <!-- shift + alt + a es para comentsrio -->


<!--     aqui va la barra de navegacion permite mover entre secciones-->

<nav>

<a href="">  Inicio  </a>  <!-- hipervinculo -->
<a href="">  Sobre mi  </a>  <!-- hipervinculo -->
<a href="">  Habilidades  </a>  <!-- hipervinculo -->
<a href="">  Proyectos  </a>  <!-- hipervinculo -->
<a href="">  Contactos  </a>  <!-- hipervinculo -->
    <a href="PHP/amin.php">  Admin  </a>  <!-- hipervinculo -->

</nav>

<!--     contenido principal-->

<main> <!-- etiqueta main -->

<section class="seccion-inicio"> <!-- section para seccionar -->

<div class="seccion-contenido">

<h2> Hola, soy Tadeo ggs </h2>
<p> Soy estudiante de TIID en la UPQ, y estoy aprendiendo programacion web </p>
<a class="boton" href="" > Ver mis proyectos </a>

</div>

</section>

<!-- seccion sobre mi -->
 <section>

<h2> Sobre mi </h2>
<div class="sobre-mi-contenido"> 
    <img src="./Images/tadeo.jpg" alt=""> <!-- introducir imagenes, la dejamos pendiente  tambien el texto en caso de que no salga la imagen  -->
      <div>

<p> Algo sobre mi imagen </p>
<p> En esta practica estoy aprendiendo html & CSS </p>
</div>
      </div>
 </section>

<!-- seccion sobre habilidades -->
 <section>

<h2> Mis habilidades </h2>

<ul class="lista-habilidades">

    <li> Java</li>
     <li> scratch</li>
     <li> Mysql</li>
     <li>Packet tracer</li>
     <li>Python</li>
   
    
</ul>
 <button id="boton-color"> Cambiar color </button>
    <button id="boton-tipo-letra"> Cambiar tipo de letra </button>
 </section>



<!-- seccion sobre proyectos -->
<section>

<h2> Mis Proyectos </h2>
<div class="contenedor-proyectos">

<article class="proyecto">

<h3> Sistema de reportes universitarios y priorizacion de mantenimiento </h3>
<p> El sistema se encarga de administrar los reportes de infraestructura de la universidad </p>
<a href=""> Ver proyecto </a>

</article>

<article class="proyecto">

<h3> Banda recicladora y clasificadora </h3>
<p> Recicla material separando por metales, plasticos y madera, cuenta con diferentes sensores </p>
<a href=""> Ver proyecto </a>

</article>

</div>

</section>

<!-- seccion sobre contacto -->
<section>

    <h2> call me baby </h2>
   
    <form id="formulario" action="guardar_mensaje.php" method="post">

<div class="campo">

<label for="nombre">
    Nombre
</label>
<input 
type="text"
id="nombre"
name="txtnombre"
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
name="txtemail"
placeholder="ejemplo@gmail.com"
required
>


</div>

<div class="campo">

    <label for="texto-mensaje">
        Mensaje
    </label>
    <textarea
    id="texto-mensaje"
    name="txtmensaje"
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


</main>


<footer>
<p>2026 Mi portafolio web </p>
<p>Practica de programacion web, todos los derechos reservados</p>
</footer>

</body>



</html>
