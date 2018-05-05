<?php
include_once 'conexion.php';

if(isset($_POST['btn-Registrar']))
{
    
    $Clave_TipoUsuario = '00002';
    $Usuario = $_POST['Usuario'];
    $Nombre = $_POST['Nombre'];
    $Ap_Paterno = $_POST['Ap_Paterno'];
    $Ap_Materno = $_POST['Ap_Materno'];
    $Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
    $Password = $_POST['Password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $Cadena_Seguridad = $_POST['Cadena_Seguridad'];
    $Calle = $_POST['Calle'];
    $Numero_Int = $_POST['Numero_Int'];
    $Numero_Ext = $_POST['Numero_Ext'];
    $Colonia = $_POST['Colonia'];
    $Codigo_Postal = $_POST['Codigo_Postal'];
    $Sexo = $_POST['Sexo'];
    $Telefono_Celular = $_POST['Telefono_Celular'];
    $Telefono_Local = $_POST['Telefono_Local'];
    $Correo_Electronico = $_POST['Correo_Electronico'];
    
    
    if($Password == $Confirm_Password){

        include_once 'conexion.php';
        // sql query for inserting data into database
        $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
        $sql_query = "INSERT INTO Usuarios (Clave_TipoUsuario, Usuario, Nombre, Ap_Paterno, Ap_Materno, Fecha_Nacimiento, Password, Cadena_Seguridad, Calle, Numero_Int, Numero_Ext, Colonia, Codigo_Postal, Sexo, Telefono_Celular, Telefono_Local, Correo_Electronico) VALUES('$Clave_TipoUsuario', '$Usuario', '$Nombre', '$Ap_Paterno', '$Ap_Materno', '$Fecha_Nacimiento', '$Password', '$Cadena_Seguridad', '$Calle', '$Numero_Int', '$Numero_Ext', '$Colonia', '$Codigo_Postal', '$Sexo', '$Telefono_Celular', '$Telefono_Local', '$Correo_Electronico')";

        if($resultado=$mysqli->query($sql_query)){
            ?>
                <script type="text/javascript">
                    alert('Felicidades, ya eres miembro de nuestro sitio \nAhora inicia sesion para poder navegar en nuestro sitio');
                    window.location.href = 'login.php';
                </script>
            <?php
        }else{
            ?>
                <script type="text/javascript">
                    alert('Ha ocurrido un error al realizar el registro, intente de nuevo');
                    //window.location.href='Registro.php';
                </script>
            <?php
        }
    }else{
        ?>
            <script type="text/javascript">
                alert('Las Contraseñas no son coinciden, intente de nuevo');
                window.location.href = 'Registro.php';

            </script>
        <?php
    }
}
?>
<html>

<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min1.css">
    <link rel="stylesheet" type="text/css" href="css/estilos3.css">
</head>

<body>

    <center>
        <h2>Registro</h2>
    </center>
    <!--Aqui demuestra algunos atributos para llenar el registro 
-->
    <center>
        <form role="form" name="registro" method="post">
            <div class="form-group">
                <label for="Usuario">Nombre de usuario</label>
                <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre(s)">
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
                <label for="Fecha_Nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha_Nacimiento">
            </div>
            <div class="form-group">
                <label for="Password">Contrase&ntilde;a</label>
                <input type="password" class="form-control" id="Password" name="Password" placeholder="Contrase&ntilde;a">
            </div>
            <div class="form-group">
                <label for="Confirm_Password">Confirmar Contrase&ntilde;a</label>
                <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password" placeholder="Confirmar Contrase&ntilde;a">
            </div>
            <div class="form-group">
                <label for="Cadena_Seguridad">Cadena de Seguridad</label>
                <input type="text" class="form-control" id="Cadena_Seguridad" name="Cadena_Seguridad" placeholder="Cadena de Seguridad">
            </div>

            <div class="form-group">
                <label for="Calle">Calle</label>
                <input type="text" class="form-control" id="Calle" name="Calle" placeholder="Calle">
            </div>
            <div class="form-group">
                <label for="Numero_Int">Numero Interno</label>
                <input type="text" class="form-control" id="Numero_Int" name="Numero_Int" placeholder="Numero_Int">
            </div>
            <div class="form-group">
                <label for="Numero_Ext">Numero Externo</label>
                <input type="text" class="form-control" id="Numero_Ext" name="Numero_Ext" placeholder="Numero_Ext">
            </div>
            <div class="form-group">
                <label for="Colonia">Colonia</label>
                <input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia">
            </div>
            <div class="form-group">
                <label for="Codigo_Postal">Codigo Postal</label>
                <input type="text" class="form-control" id="Codigo_Postal" name="Codigo_Postal" placeholder="Codigo_Postal">
            </div>
            <div class="form-group">
                <label for="Sexo">Sexo</label>
                <input class="form-control" type="radio" id="Sexo" name="Sexo" value="M" /> Hombre
                <input class="form-control" type="radio" id="Sexo" name="Sexo" value="F" /> Mujer
                <input class="form-control" type="radio" id="Sexo" name="Sexo" value="O" /> Otro
            </div>
            <div class="form-group">
                <label for="Telefono_Celular">Telefono Celular</label>
                <input type="text" class="form-control" id="Telefono_Celular" name="Telefono_Celular" placeholder="Telefono_Celular">
            </div>
            <div class="form-group">
                <label for="Telefono_Local">Telefono Local</label>
                <input type="text" class="form-control" id="Telefono_Local" name="Telefono_Local" placeholder="Telefono_Local">
            </div>
            <div class="form-group">
                <label for="Correo_Electronico">Correo Electronico</label>
                <input type="email" class="form-control" id="Correo_Electronico" name="Correo_Electronico" placeholder="Correo_Electronico">
            </div>
            <!--Aqui el botton para confirmar el registro -->
            <button type="submit" class="btn btn-default" name="btn-Registrar">Registrar</button>
        </form>
    </center>
    <script src="js/valida_registro.js"></script>
</body>

</html>
