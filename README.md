<h1>Repositorio oficial del sistema de registro de actas para sacramentos </h1>

Este es un proyecto de tesis para la universidad Mariano Gálvez de Guatemala

![](https://in3.umg.edu.gt/images/logoumg2.png)

<h2>Prueba en linea</h2>
Para utilizarlo en línea, copiar el siguiente enlace en tu navegador:       

https://registroparroquia.tcsogt.com/vistas/login.php

<h4>Las credenciales son las siguientes:</h4>

correo: velasquezmynor.1998@gmail.com 

contraseña: Admin123*


<h2>Instalación de manera local</h2>

<h2> Paso #1 </h2>

Como primer paso debes de instalar algún servidor local que cuente con Php versión 8.0.7 o superior y MySQL con PhpMyadmin. recomiendo que utilices Xampp por la facilidad de la instalación. A continuación, un link de descarga:

> > https://www.apachefriends.org/download.html

Puedes descargarlo para el sistema operativo que utilices, sea Windows, OS o Linux.

<h2> Paso #2 </h2>

Luego de tener el servidor local instalado, debemos de descargar los archivos de Github o bien clonarlos y colocarlos en la carpeta correspondiente, según nuestro servidor local, en el caso de Xampp, debemos de colocarlo en la siguiente ruta:

> > C:\xampp\htdocs

si estas usando algún otro debes de colocarlo en la carpeta correspondiente para que se lance correctamente la página WEB

<h2> Paso #3 </h2>

Actualmente el sistema no va a funcionar debido que aún no está creada la base de datos, para eso debemos de dirigirnos a los archivos del sistema y encontraremos un archivo llamado registroiglesia.sql este archivo contiene el script correspondiente para la creación de la base de datos.

Nos dirigimos hacia PhpMyadmin y del lado izquierdo encontraremos nueva base de dados y seleccionamos esa opción, cuando estemos en el apartado, colocamos el nombre de la base de datos a crear, el cual seria "registroiglesia" y el tipo de base de datos, colocamos utf8_general_ci. Seguido presionamos el botón crear y se creara la base de datos que necesitamos. Luego seleccionamos la nueva base de datos y nos vamos al apartado de importar, presionamos el botón de seleccionar archivo, seleccionamos el archivo antes mencionado llamado registroiglesia.sql lo cargamos y presionamos continuar y se creará la base de datos en MySQL.

Una vez creada la base de datos en MySQL el sistema esta listo para ser usado.

<h2> Paso #4 </h2>

Para acceder al sistema de manera local, abrimos el navegador de nuestra preferencia y colocamos la siguiente ruta en nuestro navegador:

> > https://localhost/SistemaRegistro/control

Seguido encontraremos una interfaz como esta:

<p align="center">
  <img src="parroquia.png" width="400" title="Login">
</p>

Las credenciales para ingresar al sistema como un usuario administrador son las siguientes:

<h3> Credenciales </h3>

correo: velasquezmynor.1998@gmail.com
contraseña: Admin123*
