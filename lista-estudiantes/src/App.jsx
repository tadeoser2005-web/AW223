import Estudiantes from "./components/Etudiantes";
import "./App.css";
export default function App() {

  const estudiantes = [
    { id: 1, nombre: "Glenda", carrera: "Finanzas" },
    { id: 2, nombre: "Tadeo", carrera: "Sistemas" },
    { id: 3, nombre: "Sebas", carrera: "Mecatronica" },
    { id: 4, nombre: "Adrian", carrera: "Administracion" },
  ];

  return (
    <main className="contenedor">
      <h1>Listado de estudiantes</h1>
      <form>
        <input type="text" placeholder="Escribe tu nombre" />
        <input type="text" placeholder="Ingresa tu carrera"></input>
        <button type="button">Agregar</button>

      </form>
      <h2>Estudiantes registrados</h2>
      <ul>
        {estudiantes.map((estudiante) => (

          <Estudiantes
            key={estudiante.id}
            estudiante={estudiante}
          />
        ))
        }
      </ul>
      <p> Total de estudiantes: {estudiantes.length} </p>

    </main>
  );
}