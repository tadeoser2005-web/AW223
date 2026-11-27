# Backend de estudiantes

## Instalar dependencias en macOS Apple Silicon

`Flask-MySQLdb` necesita compilar `mysqlclient`. Con el cliente de MySQL instalado en Homebrew, configura sus headers y biblioteca antes de instalar:

```bash
export MYSQLCLIENT_CFLAGS="-I/opt/homebrew/opt/mysql/include/mysql"
export MYSQLCLIENT_LDFLAGS="-L/opt/homebrew/opt/mysql/lib -lmysqlclient"
export ARCHFLAGS="-arch arm64"
../.venv/bin/python -m pip install -r requirements.txt
```
