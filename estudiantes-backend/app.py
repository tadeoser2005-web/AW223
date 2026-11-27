from flask import Flask
from config import config #la segunda es la clase del archivo config.py, la primera es el archivo config.py
from flask_mysqldb import MySQL

mysql = MySQL()

def create_app():
    from controllers.controladorAlumno import controladorAlumnoBP
    app = Flask(__name__)
    app.register_blueprint(controladorAlumnoBP)  #dar de alta el controlador
    app.config.from_object(config)#aqui le paso la clase config, que es la que tiene los datos de conexion a la base de datos
    mysql.init_app(app) #inicializo la conexion a la base de datos
    return app

if __name__ == '__main__':
    app = create_app()  #inicializacion del servidor
    app.run(port=5000,debug=True)