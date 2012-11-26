#Datos de la base de datos


En la carpeta SQL/datos ingresaremos archivos backup para pgadmin3 de las tablas con datos ingresados,para que todos tengamos los mismos datos, por ejemplo, la tabla carreras. 



**Instrucciones para exportar un backup**
Usted abre pgadmin3, luego ingresa a su base de datos, hace click derecho en la tabla que quiere exportar y se va a la opcion backup.
Le coloca el nombre por ejemplo DatosCarreras. Luego en formato elije la opcion .tar, compres radio vacio, decodificacion UTF-8, rolename vacio. luego nos dirijimos a Dump Options #1 y marcamos la opcion Data(Datos) luego click en backup. Hemos realizado la exportacion de datos.

**Intrucciones para importar un backup**
Usted abre pgadmin3, luego ingresa a su base de datos, hace click derecho en la tabla que quiere importar y se va a la opcion restore.
Busca el archivo, si no aparece haga click en ver todos los archivos, doble click en su archivo y hacemos click en restore.
Listo importamos los datos del archivo.



