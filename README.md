Inicialmente si deseas utilizar el sistema de registro de sacramentos, debes de seguir los siguientes pasos:

#1 Como primer paso debes de instalar algún servidor local que cuente con Php versión 8.0.7 o superior y MySQL con PhpMyadmin.
 recomiendo que utilices Xampp por la facilidad de la instalación. A continuación, un link de descarga:
 
 https://www.apachefriends.org/download.html
 
 Puedes descargarlo para el sistema operativo que utilices, sea Windows, OS o Linux.
 
 
 #2 Luego de tener el servidor local instalado, debemos de descargar los archivos de Github y colocarlos en la carpeta
	   correspondiente, según nuestro servidor local, en el caso de Xampp, debemos de colocarlo en la siguiente ruta:
 
	C:\xampp\htdocs
	
 si estas usando algún otro debes de colocarlo en la carpeta correspondiente para que se lance correctamente la página WEB
 
 #3 Actualmente el sistema no va a funcionar debido que aún no está creada la base de datos, para eso debemos de dirigirnos a los archivos del sistema
 y encontraremos un archivo llamado registros.sql este archivo contiene el código correspondiente para la creación de la base de datos.
 
 Nos dirigimos hacia PhpMyadmin y seleccionamos el apartado importar, cuando estemos en el apartado, presionamos el botón de seleccionar archivo, 
seleccionamos el archivo antes mencionado llamado registros.sql lo cargamos y presionamos continuar y se creará la base de datos en MySQL. 

Una vez creada la base de datos en MySQL el sistema esta listo para ser usado.

El inicio de sesión cuenta con un correo velasquezmynor.1998@gmail.com y contraseña Admin123* el cual lo redirigirá al sistema con un tipo de usuario administrador.
