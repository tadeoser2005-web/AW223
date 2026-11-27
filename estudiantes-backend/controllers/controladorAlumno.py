#aqui voy a tener las rutas q corresppnden a las acciones del backend
from flask import Blueprint,request,jsonify
from Models.modelEstudiante import * #con * se importa todas las funciones del archivo modelEstudiante.py

controladorAlumnoBP = Blueprint('controladorAlumno',__name__)
#con este objeto utilizo las rutas, con este las construyo

@controladorAlumnoBP.route('/') #ruta de inicio, donde inicia la app
def inicio():
    return "Hola mundo Flask"

#ruta para insertar
@controladorAlumnoBP.route('/guardarAlumno',methods=['POST'])
def guardar():
   nombreReq = request.form.get('txtNombre').strip()
   carreraReq = request.form.get('txtCarrera').strip()
   
   try:
       insertEstudiante(nombreReq,carreraReq)
       return jsonify({"mensaje":"Se guardo el alumno correctamente"}),200
   except Exception as e:
       return jsonify({"mensaje":"Error al guardar el alumno","error":str(e)}),500


#ruta para consultar todo
@controladorAlumnoBP.route('/consultatodo') #si lo dejamos sin el methods hay un get
def consultatodo():
    try:
        alumnos = selectAll()
        return jsonify(alumnos),200;
    except Exception as e:
        return jsonify({"mensaje":"Error al consultar los alumnos","error":str(e)}),500


#ruta para actualizar alumno
@controladorAlumnoBP.route('/actualizarAlumno',methods=['PUT']) #si lo dejamos sin el methods hay un get
def actualizar():
    id = request.form.get('id','').strip()
    nombre = request.form.get('txtNombre','').strip()
    carrera = request.form.get('txtCarrera','').strip()

    try:
       actualizarEstudiante(id,nombre,carrera)
       return jsonify({"mensaje":"Se actualizo el alumno correctamente"}),200
    except Exception as e:
       return jsonify({"mensaje":"Error al actualizar el alumno","error":str(e)}),500


#ruta para eliminar alumno
@controladorAlumnoBP.route('/eliminarAlumno',methods=['PUT']) #si lo dejamos sin el methods hay un get
def eliminar():
    id = request.form.get('id','').strip()
    
    try:
        softDeleteEstudiante(id)
        return jsonify({"mensaje":"Se elimino el alumno correctamente"}),200
    except Exception as e:
        return jsonify({"mensaje":"Error al eliminar el alumno","error":str(e)}),500
    
@controladorAlumnoBP.route('/consultarAlumno',methods=['GET']) #si lo dejamos sin el methods hay un get
def consultar():
    id = request.form.get('id','').strip()
    
    try:
        alumno = consultarEstudiante(id)
        return jsonify(alumno),200
    except Exception as e:
        return jsonify({"mensaje":"Error al consultar el alumno","error":str(e)}),500