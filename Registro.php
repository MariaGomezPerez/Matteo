<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min1.css">
		<link rel="stylesheet" type="text/css" href="css/estilos3.css">
	</head>
	<body>

		<center><h2>Registro</h2></center>
<!--Aqui demuestra algunos atributos para llenar el registro 
     -->
		<center><form role="form" name="registro" action="php/Registro.php" method="post">
		  <div class="form-group">
		    <label for="Usuario">Nombre de usuario</label>
		    <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="Nombre">Nombre</label>
		    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for=" Ap_Paterno">Apellido Paterno</label>
		    <input type="text" class="form-control" id=" Ap_Paterno" name=" Ap_Paterno" placeholder=" Ap_Paterno">
		  </div>
            <div class="form-group">
		    <label for="Ap_Materno">Apellido Materno</label>
		    <input type="text" class="form-control" id="Ap_Materno" name="Ap_Materno" placeholder="Ap_Materno">
		  </div>
            
		  <div class="form-group">
		    <label for="Contraseña">Contrase&ntilde;a</label>
		    <input type="Contraseña" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>
             <div class="form-group">
		    <label for="Cadena_Seguridad">Cadena Seguridad</label>
		    <input type="text" class="form-control" id="Ap_Materno" name="Ap_Materno" placeholder="Ap_Materno">
		  </div>
             <div class="form-group">
		    <label for="Ap_Materno">Apellido Materno</label>
		    <input type="text" class="form-control" id="Ap_Materno" name="Ap_Materno" placeholder="Ap_Materno">
		  </div>
             <div class="form-group">
		    <label for="Calle">Apellido Materno</label>
		    <input type="text" class="form-control" id="Calle" name="Calle" placeholder="Calle">
		  </div>
             <div class="form-group">
		    <label for="Numero_Int">Apellido Materno</label>
		    <input type="text" class="form-control" id="Numero_Int" name="Numero_Int" placeholder="Numero_Int">
		  </div>
             <div class="form-group">
		    <label for="Numero_Ext">Apellido Materno</label>
		    <input type="text" class="form-control" id="Numero_Ext" name="Numero_Ext" placeholder="Numero_Ext">
		  </div>
             <div class="form-group">
		    <label for="Colonia">Apellido Materno</label>
		    <input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia">
		  </div>
             <div class="form-group">
		    <label for="Codigo_Postal">Apellido Materno</label>
		    <input type="text" class="form-control" id="Codigo_Postal" name="Codigo_Postal" placeholder="Codigo_Postal">
		  </div>
             <div class="form-group">
		    <label for="Fecha_Nacimiento">Apellido Materno</label>
		    <input type="text" class="form-control" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha_Nacimiento">
		  </div>
             <div class="form-group">
		    <label for="Sexo">Apellido Materno</label>
		    <input type="text" class="form-control" id="Sexo" name="Sexo" placeholder="Sexo">
		  </div>
             <div class="form-group">
		    <label for="Telefono_Celular">Apellido Materno</label>
		    <input type="text" class="form-control" id="Telefono_Celular" name="Telefono_Celular" placeholder="Telefono_Celular">
		  </div>
             <div class="form-group">
		    <label for="Telefono_Local">Apellido Materno</label>
		    <input type="text" class="form-control" id="Telefono_Loca" name="Telefono_Loca" placeholder="Telefono_Loca">
		  </div>
            <div class="form-group">
		    <label for="Correo_Electronico">Correo Electronico</label>
		    <input type="text" class="form-control" id="Correo_Electronico" name="Correo_Electronico" placeholder="Correo_Electronico">
		  </div>
<!--Aqui el botton para confirmar el registro -->
		  <button type="submit" class="btn btn-default">Registrar</button>
		</form></center>
		

		<script src="js/valida_registro.js"></script>
	</body>
</html>