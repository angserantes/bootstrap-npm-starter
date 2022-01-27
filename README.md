## Seguridad y usuarios-inicio de sesión/bootstrap

1. Clonamos el repositorio de bootstrap starter a través del siguiente comando en Laragon:

git clone https://github.com/twbs/bootstrap-npm-starter

2. Instalamos las dependencias que se indican en el repositorio:
npm i

npm run css-compile

npm run watch

npm run server

npm start


3. Creamos la carpeta /src con los archivos "sesiones1_login.php, sesiones1_principal.php y sesiones1_logout.php"

4. Añadimos el contenido que nos ofrece el manual en la unidad 3.

5.  En los archivos "sesiones1_login.php y sesiones1_principal.php" enlazamos las hojas de estilo de css y scss

6. Importamos una base de datos a través de phpMyAdmin.

7. En el archivo "sesiones1_principa.php" hacemos la conexión a la base de datos:
  $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
  
8. Lo visualizamos en el navegador de la siguiente forma:
![login](https://i.ibb.co/GRnYDf8/Fire-Shot-Capture-020-Formulario-de-login-localhost.png)
![conexión BDD](https://i.ibb.co/CwQLBkf/Fire-Shot-Capture-021-P-gina-principal-localhost.png)
