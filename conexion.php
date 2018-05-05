<?php 
// Parametros a configurar para la conexion de la base de datos 
$hostdb = "localhost";    // sera el valor de nuestra servidor
$usuariodb = "root";    // sera el valor de nuestra BD 
$clavedb = "";    // sera el valor de nuestra BD 
$basededatos = "CMatteoCoffe";    // sera el valor de nuestra BD 

// Fin de los parametros a configurar para la conexion de la base de datos 
$cadenaConexion = mysqli_connect("$hostdb","$usuariodb","$clavedb","$basededatos");
// Check connection
if (mysqli_connect_errno())
    {
    echo "Falló la conexion a MySQL: " . mysqli_connect_error();
    }

if (!$cadenaConexion->set_charset("utf8mb4")) {
    exit();
} else {
}
?>