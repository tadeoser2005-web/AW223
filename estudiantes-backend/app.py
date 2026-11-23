from flask import Flask

app = Flask(__name__)

@app.route('/') #ruta de inicio, donde inicia la app
def inicio():
    return "Hola mundo Flask"

@app.route('/soyotraruta') #ruta de inicio, donde inicia la app
def otra():
    return "GGS"

if __name__ == '__main__':
    app.run(debug=True)