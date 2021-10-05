# 03-web-cotizador
Sistema web con PHP y MySQL que permite crear clientes y a partir de ellos cotizaciones con el costo automático
La cotización debe de ser en formato PDF(no editable para usuarios de nivel lector)  

# Tecnologías que usa  
Utiliza _PHP_, el framework _Bootstrap 4_ para los estilos y sólo un poco de _JavaScript_ con _Vue.js_ para mejorar la experiencia de usuario y renderizar
  
# Montar sistema  
Servidor con *PHP y Apache*. La versión mínima de PHP es la *5.6*, esto debido a que se usa la notación corta del arreglo `[]`.
Existe PHP 8, pero incluso así, este software es compatible con la versión anteriormente mencionada.

## Extensiones  
* PDO  

## Base de datos  
Base de datos de MySQL o MariaDB. El esquema está en _esquema.sql_  
  
## Credenciales  
Configurar las credenciales en el archivo _env.php_; tomar como referencia _env.ejemplo.php_ y crear uno nuevo dependiendo del servidor.  

# En la carpeta configuraciones estan los archivos de interfaz y base de datos 
 
