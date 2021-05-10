# Foro Vulnerable PHP :tada:

Es recomendable utilizar el proyecto de NGINX/PHP/MySQL de nanoninja disponible en https://github.com/nanoninja/docker-nginx-php-mysql. 

* Crea una base de datos llamada "forum" por medio de phpMyAdmin. Para ello debes utilizar el usuario root y posteriormente dar privilegios sobre el uso de la tabla a otro usuario llamado dev.

* Ejecuta las sentencias SQL contenidas en el fichero DatabaseSentences.sql que se encuentra en la carpeta raiz del proyecto.
* Copia el contenido de Vulnerable Forum a una carpeta llamada foro dentro de tu servidor web. Ej. http://nombredeservidor/foro

<details>
<summary><b>Asignatura: Puesta en Producción Segura :rocket:</b></summary>

* Especialización en Ciberseguridad. Curso 2020-21
* Alumno: Julio
* Escaner de vulnerabilidades utilizado: Vega
</details>

## Punto de partida 
<details>
<summary><b>Instalación Inicial del proyecto vulnerable :camel:</b></summary>

```bash
git clone https://github.com/nanoninja/docker-nginx-php-mysql.git
rm -r docker-nginx-php-mysql/.git
cd docker-nginx-php-mysql/web/public/
git clone https://github.com/pulsaf1/VulnerableForum.git
rm -r VulnerableForum/.git
mv VulnerableForum foro
editamos /foro/config/config.php para cambiar el puerto al 8000 que usa nanoninja por defecto
docker-compose up -d (en el directorio docker-nginx-php-mysql)
Entramos con un navegador a phpmyadmin con localhost:8080 (credenciales root/root)
  | Creamos la nueva base de datos forum
  | Importamos la secuencia de comandos sql DatabaseSentences.sql
  | En Inicio → Cuentas de usuarios → dev → Privilegios globales
  | marcamos seleccionar todo → Botón Continuar.
Con esto tenemos configurado el proyecto Inicial
```
</details>

## Componentes de software
<details>
<summary><b>Componentes de software :octocat:</b></summary>

First Header | Second Header                         |
------------ | --------------------------------------|
ckeditor4    | https://github.com/ckeditor/ckeditor4 |
bootstrap    | https://getbootstrap.com              |
jquery       | https://jquery.com                    |

</details>