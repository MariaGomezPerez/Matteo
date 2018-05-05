<?php
    $Usuario = $_POST['usuario'];
    $PalabraSecreta = $_POST['pasecret'];
    $NewPass = $_POST['password'];
    $NewPass2 = $_POST['confirm_password'];
    include_once 'Conexion.php';
    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query = "SELECT * FROM Usuarios WHERE Usuario = '".$Usuario."'";
    $resultado = $mysqli->query($sql_query);
    if($fetched_row = $resultado->fetch_array(MYSQLI_ASSOC)){
        if($fetched_row['Cadena_Seguridad'] == $PalabraSecreta){
            if($NewPass == $NewPass2){
                $sql_query = "UPDATE Usuarios SET Password = '$NewPass' WHERE Usuario = '".$Usuario."'";
                if($resultado = $mysqli->query($sql_query)){
                    ?>
                    <script type="text/javascript">
                        alert('Contraseña Actualizada');
                        window.location.href='login.php';
                    </script>
                    <?php    
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('Ha Ocurrio Un Error');
                        window.location.href='Cambiarcont.php';
                    </script>
                    <?php
                }
            }else{
                ?>
                <script type="text/javascript">
                    alert('Las Contraseñas No Coinciden');
                    window.location.href='Cambiarcont.php';
                </script>
                <?php    
            }
        }else{
            ?>
            <script type="text/javascript">
                alert('Ha Ocurrido Un Error, Vuelva a Intentarlo');
            </script>
            <?php
            header("Location:Cambiarcont.php");
            exit();
            
        }
    }else{
        ?>
            <script type="text/javascript">
                alert('Ha Ocurrido Un Error, Vuelva a Intentarlo');
            </script>
        <?php
        header("Location:Cambiarcont.php");
        exit();
    }
?>