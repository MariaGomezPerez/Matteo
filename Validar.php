<?php
    $Usuario = $_POST['usuarioi'];
    $Pass = $_POST['passwordi'];
    if(empty($Usuario) || empty($Pass)){
        header("Location:Login.php");
        exit();
    }
    include_once 'Conexion.php';

    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query = "SELECT * FROM Usuarios WHERE Correo_Electronico = '".$Usuario."'";
    $BaseAdmin = $mysqli->query($sql_query);

    if($fetched_row = $BaseAdmin->fetch_array(MYSQLI_ASSOC)){
        if($fetched_row['Password'] == $Pass){
            session_start();
            $_SESSION['Usuario'] = $Usuario;
            header("Location:index.php");
        }else{
            ?>
                <script type="text/javascript">
                    alert('El Correo Electronico o Contraseña no son correctos');
                    window.location.href='login.php';
                </script>
            <?php
            exit();
        }
    }else{
        ?>
            <script type="text/javascript">
                if(confirm('Este Correo Electronico aun no esta registrado \n¿Quisiera Registrarse?\n<?php echo $Usuario;?>'))
                {
                    window.location.href='Registro.php';
                }else{
                    window.location.href='login.php';
                }
            </script>
        <?php
        exit();
    }
?>