#  PRACTICA 5 - CRUD


1. **Inicio de sesión en la aplicación:**
   - Se debe permitir el inicio de sesión en la aplicación.

2. **Para usuarios administradores:**
   - Redirección a la pantalla de administrador.
   - Mostrar un mensaje de bienvenida.
   - Mostrar por defecto todos los usuarios de la base de datos que sean profesores.
   - Mostrar información (nombre, apellido, correo, estado) de cada profesor en una tabla.
   - Cada registro tiene un botón para modificar sus valores.
   - Al hacer clic en el botón, se redirige a una pantalla con un formulario que carga los valores del profesor para su modificación y guardado.
   - Después de guardar, regresar automáticamente a la página de inicio y mostrar todos los cambios en la lista de profesores.
   - Cada registro tiene un botón para eliminarlo.
   - Después de la eliminación, mostrar la lista de profesores actualizada.
   - Si no hay registros en la base de datos, mostrar un mensaje que indique "No hay profesores".
   - Siempre visible un botón en la parte inferior para agregar un profesor.
   - Al hacer clic, redirigir a una pantalla con un formulario y un botón para guardar la información.

3. **Para usuarios profesores:**
   - Realizar el mismo proceso que el administrador.
   - Gestionar a través de un CRUD los usuarios que sean alumnos.

     
   - PAGINA DEL ADMINISTRADOR
  
   - [https://github.com/markis24/M07_UF2/my-project/img/Pagina administrador.png] 

   - NOTA IMPORTANTE:

- La creación debe utilizar el método POST.
- La edición debe utilizar el método PUT.
- La eliminación debe utilizar el método DELETE.
