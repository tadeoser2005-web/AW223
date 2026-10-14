/*let botonCambio = document.getElementById("boton-cambio");
let textobienvenida = document.getElementById("texto-bienvenida");
let botoncolor = document.getElementById("boton-color");
let botonletra = document.getElementById("boton-tipo-letra");
let habilidades = document.querySelectorAll(".lista-habilidades li");
let formulario = document.getElementById("formulario");
let nombre = document.getElementById("nombre");
let correo = document.getElementById("correo");
let mensaje = document.getElementById("mensaje");

/!* Al momento de hacer click en el boton este cambiara el texto de bienvenida *!/
botonCambio.addEventListener("click", function () {
    textobienvenida.textContent = "Cambie el texto";
});

botoncolor.addEventListener("click", () => {
    habilidades.forEach(li => {
        li.style.color = "aqua";
    });
});

/!* Estos dos botones hacen cambiar la tipografia y el color de las listas *!/

botonletra.addEventListener("click", () => {
    habilidades.forEach(li => {
        li.style.fontFamily = "cursive";
    });
});

formulario.addEventListener("submit", (e) => {
    e.preventDefault();

    if (nombre.value.trim() === "") {
        mensaje.textContent = "Por favor escribe tu nombre";
        mensaje.style.color = "red";
        return;
    }

    if (correo.value.trim() === "") {
        mensaje.textContent = "Por favor escribe tu correo";
        mensaje.style.color = "red";
        return;
    }

    mensaje.textContent = "Tus datos han sido enviados";
    mensaje.style.color = "green";
});*/
