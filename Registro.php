<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min2.css">
		<link rel="stylesheet" type="text/css" href="css/estilos3.css">
	</head>
	<body>

		<center><h2>Registro</h2></center>
<!--Aqui demuestra algunos atributos para llenar el registro 
     -->
		<center><form role="form" name="registro" action="php/Registro.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nombre</label>
		    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre Completo">
		  </div>
		  
		  <div class="form-group">
		    <label for="Contraseña">Contrase&ntilde;a</label>
		    <input type="Contraseña" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>
<!--Aqui el botton para confirmar el registro -->
		  <button type="submit" class="btn btn-default">Registrar</button>
		</form></center>
		

		<script src="js/valida_registro.js"></script>
	</body>
</html>