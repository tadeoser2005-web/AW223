export default function Estudiantes({ estudiante }) {
    return (
        <li>
            <strong>{estudiante.nombre}</strong> {" -- "} {estudiante.carrera}
            <button type="button"> Eliminar </button>
        </li>
    );
}