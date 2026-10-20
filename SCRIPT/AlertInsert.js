const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp");

if (estado === "exito") {
    alert("Exito, tu mensaje fue guardado");
} else if (estado === "error") {
    alert("Error, tu mensaje no se pudo guardar");
}
else if (estado === "actualizado") {
    alert("Exito, tu mensaje fue actualizado");
}
else if (estado === "eliminado") {
    alert("Exito, tu mensaje fue eliminado");
}
if(estado != null) {
    window.history.replaceState({},document.title,window.location.pathname);
}