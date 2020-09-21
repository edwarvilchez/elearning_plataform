<h1>Plataforma E-Learning</h1>
<hr>
<!--iniciamos sesión-->
<h2>Iniciar Sesión</h2>
<!--apertura formulario para ingreso-->
<form action="index.php" method="POST">
    Usuario <br>
    <input type="text" name="user_name" placeholder="Ingrese su Usuario" required><br>
    Contraseña <br>
    <input type="password" name="pass" placeholder="Ingrese su Contraseña" required><br>
    <input type="button" value="Ingresar"><br>
</form>
<!--cierre de formulario para ingreso-->
<hr>
<!--registramos al usuario-->
<h2>Registro de Usuario</h2>
<!--apertura de formulario para registro-->
<form action="index.php" method="POST" enctype="multipart/form-data">
    Usuario <br>
    <input type="text" name="user_name" placeholder="Ingrese su Usuario" required><br>
    Contraseña <br>
    <input type="password" name="pass" placeholder="Ingrese su Contraseña" required><br>
    Nombre <br>
    <input type="text" name="full_name" placeholder="Ingrese su Nombre" required><br>
    Apellido <br>
    <input type="text" name="last_name" placeholder="Ingrese su Apellido" required><br>
    Foto <br>
    <input type="file" name="photo" placeholder="Cargue su Foto" required><br>
     
    <input type="button" value="Registro"><br>
</form>
<!--cierre de formulario para registro-->
<hr>