from flask import Flask
from controllers.controladorAlumno import controladorAlumnoBP

def create_app():
    app = Flask(__name__)
    app.register_blueprint(controladorAlumnoBP)  #dar de alta el controlador
    return app

if __name__ == '__main__':
    app = create_app()  #inicializacion del servidor
    app.run(port=5000,debug=True)