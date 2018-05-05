<?php require_once('../Connections/conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE productos SET Clave_Producto=%s, Imagen=%s, Nombre=%s, Descripcion=%s, Precio=%s WHERE Categoria=%s",
                       GetSQLValueString($_POST['Clave_Producto'], "int"),
                       GetSQLValueString($_POST['Imagen'], "text"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['Precio'], "double"),
                       GetSQLValueString($_POST['Categoria'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

  $updateGoTo = "agregarproducto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO productos (Categoria, Clave_Producto, Imagen, Nombre, Descripcion, Precio) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Categoria'], "int"),
                       GetSQLValueString($_POST['Clave_Producto'], "int"),
                       GetSQLValueString($_POST['Imagen'], "text"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['Precio'], "double"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "agregarproducto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_conexion, $conexion);
$query_base = "SELECT * FROM productos";
$base = mysql_query($query_base, $conexion) or die(mysql_error());
$row_base = mysql_fetch_assoc($base);
$totalRows_base = mysql_num_rows($base);
?><!DOCTYPE html>
<html lang="es">
<head>
	<title>Panel de Administración</title>
	
	<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="../js/scripts.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="../css/estilos1.css">
	<script type="text/javascript"  href="../js/scripts.js"></script>
   <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>

<body>
    <div id="wrapper">
  <div id="banner">
    <div id="logo"></div>
  </div>
  <div class="menuBar">
   <ul>
	    <li><a href="../">Inicio</a></li>
		<li><a href="../admin.php">Ultimas Compras</a></li>
	    <li><a href="agregarproducto.php" class="selected">Agregar</a></li>
	    <li><a href="./modificar.php" >Modificar</a></li>
	    <li><a href="../login/cerrar.php">Salir</a></li>
    </ul>
</div>
        <div class="container1_inner">
    <div class="container2r">
      <div class="workarea_inner">
        <h1><span class="welcome">Administrador</span> </h1>
        <div style="padding:0 15px 20px 15px;">
          <div><strong></strong> <br />
            <br /> <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="container">

<center><h1>Agregar un Nuevo Producto</h1>
  <p>
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="Categoria" value="<?php echo $row_base['Categoria']; ?>">
  </p>

    
    <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
      <table width="459" align="center">
        <tr valign="baseline">
          <td width="93" align="right" nowrap>Categoria:</td>
          <td width="354"><input type="text" name="Categoria2" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Clave_Producto:</td>
          <td><input type="text" name="Clave_Producto" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Imagen:</td>
          <td><input type="text" name="Imagen" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Nombre:</td>
          <td><input type="text" name="Nombre" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Descripcion:</td>
          <td><input type="text" name="Descripcion" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Precio:</td>
          <td><input type="text" name="Precio" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td height="39" align="right" nowrap>&nbsp;</td>
          <td><input name="submit" type="submit" value="Insert record"></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1">
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</center>
    </body>
</html>
<?php
mysql_free_result($base);
?>