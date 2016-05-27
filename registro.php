<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
     <form action="registro.php" method="post">
	 <label for="email">Correo</label><input type="email" name="email">
	 <br>
	 <label for="password">Contraseña</label><input type="password" name="password">
	 <br>
	 <label for="nombre">Nombre</label><input maxlength="30" 
	 name="nombre">
	 <br>
	 <label for="apellido">Apellido</label><input maxlength="30" 
	 name="apellido">
	 <br>
	 <label for="cedula">Cedula</label><input maxlength="20" 
	 name="cedula">
      <br>
	 <label for="telefono">Telefono</label><input type="tel" 
	 name="telefono"><br>
	 <input type="submit">

	 </form>

	
</body>
</html>