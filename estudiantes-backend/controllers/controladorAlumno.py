#aqui voy a tener las rutas q corresppnden a las acciones del backend
from flask import Blueprint

controladorAlumnoBP = Blueprint('controladorAlumno',__name__)
#con este objeto utilizo las rutas, con este las construyo

@controladorAlumnoBP.route('/') #ruta de inicio, donde inicia la app
def inicio():
    return "Hola mundo Flask"

#ruta para insertar
@controladorAlumnoBP.route('/guardarAlumno',methods=['POST'])
def guardar():
    return 'Se guardo el alumno'

#ruta para consultar todo
@controladorAlumnoBP.route('/consultatodo') #si lo dejamos sin el methods hay un get
def consultatodo():
    return 'Se consulto todo'


#ruta para actualizar alumno
@controladorAlumnoBP.route('/actualizarAlumno',methods=['PUT']) #si lo dejamos sin el methods hay un get
def actualizar():
    return 'Se actualizo el alumno'


#ruta para eliminar alumno
@controladorAlumnoBP.route('/eliminarAlumno',methods=['DELETE']) #si lo dejamos sin el methods hay un get
def eliminar():
    return 'Se elimino el alumno'