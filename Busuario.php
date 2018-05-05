<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cambiar Contraseña</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" href="./js/scripts.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- vinculo a bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Temas-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->
    <link rel="stylesheet" type="text/css" href="./css/css2/estilo.css">



</head>

<body>
    <div id="wrapper">

        <div class="container1_inner">
            <div class="container2r">
                <div class="workarea_inner">

                    <div style="padding:0 15px 20px 15px;">
                        <div><strong></strong> <br />
                            <br />
                            <section id="content">
                                <div class="ic"></div>
                                <div class="main">
                                    <div class="container">

                                        <div id="Contenedor">
                                            <h1><span class="welcome">Buscar Usuario</span> </h1>
                                            <div class="Icon">
                                                <!--Icono de usuario-->
                                                <span class="glyphicon glyphicon-user"></span>
                                            </div>
                                            <div class="ContentForm">
                                                <form action="#" method="post" name="FormEntrar">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                                        <!--<input type="email" class="form-control" name="RFC" placeholder="RFC" id="RFC" aria-describedby="sizing-addon1" required>-->
                                                        <input type='email' class='form-control' name='Correo'/>
                                                    </div>
                                                    <br>
                                                    <?php
                                                        error_reporting(E_ERROR);
                                                        $Palabra = "";
                                                        $Palabra = $_POST['Correo'];
                                                        $Disabled = "none";
                                                        $DisabledNo = "none";
                                                        include_once 'conexion.php';
                                                        $i = 0;
                                                        $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
                                                        if ($mysqli -> connect_errno) {
                                                            die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
                                                        }
                                                        else
                                                        {
                                                            $sql_query="SELECT * FROM Usuarios WHERE Correo_Electronico = '$Palabra'";
                                                            $resultado=$mysqli->query($sql_query);
                                                            $Total = 0;
                                                            $row_cnt = $resultado->num_rows;
                                                            while($registro = $resultado->fetch_assoc()) 
                                                            {
                                                                $UsuarioRFC = $registro['Correo_Electronico'];
                                                                $UsuarioFound = $registro['Usuario'];
                                                            }
                                                            if($UsuarioRFC == $Palabra){
                                                                $Disabled = "";
                                                            }else{
                                                                $DisabledNo = "";
                                                            }
                                                        }
                                                        ?>
                                                        <div class='form-group' style="display: <?php echo $Disabled; ?>">
                                                            <div class='col-md-12'>
                                                                <h2 style="color: #18bc9c;"><?php echo $UsuarioFound; ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class='form-group' style="display: <?php echo $DisabledNo; ?>">
                                                            <div class='col-md-12'>
                                                                <center>
                                                                    <h2 style="color: red">Usuario No Encontrado</h2>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    <br>
                                                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Buscar</button>
                                                    <br>
                                                    <div class="opcioncontra"><a href="login.php">Regresaro</a></div>

                                                </form>
                                            </div>
                                        </div>


                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                        <div class="servicecolumnzone">

                                            <div class="clear"></div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                    <div style="padding-top:10px;"></div>
                            </section>
                            </div>
                        </div>
                    </div>
                    <div class="menuBar2">

                    </div>
</body>

</html>
