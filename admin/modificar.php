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

$currentPage = $_SERVER["PHP_SELF"];

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

  $updateGoTo = "modificar.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$maxRows_base = 1;
$pageNum_base = 0;
if (isset($_GET['pageNum_base'])) {
  $pageNum_base = $_GET['pageNum_base'];
}
$startRow_base = $pageNum_base * $maxRows_base;

mysql_select_db($database_conexion, $conexion);
$query_base = "SELECT * FROM productos";
$query_limit_base = sprintf("%s LIMIT %d, %d", $query_base, $startRow_base, $maxRows_base);
$base = mysql_query($query_limit_base, $conexion) or die(mysql_error());
$row_base = mysql_fetch_assoc($base);

if (isset($_GET['totalRows_base'])) {
  $totalRows_base = $_GET['totalRows_base'];
} else {
  $all_base = mysql_query($query_base);
  $totalRows_base = mysql_num_rows($all_base);
}
$totalPages_base = ceil($totalRows_base/$maxRows_base)-1;

$queryString_base = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_base") == false && 
        stristr($param, "totalRows_base") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_base = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_base = sprintf("&totalRows_base=%d%s", $totalRows_base, $queryString_base);
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

   <style type="text/css">
<!--
.style3 {color: #000000; font-weight: bold; }
.style5 {color: #FFFFFF; font-weight: bold; }
.style7 {color: #CCCCCC; font-weight: bold; }
-->
   </style>
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

<center><h1>Modificar Producto</h1>
  <p>&nbsp;</p>

    <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
      <table align="center">
        <tr valign="baseline">
          <td nowrap align="right">Categoria:</td>
          <td><?php echo $row_base['Categoria']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Clave_Producto:</td>
          <td><input type="text" name="Clave_Producto" value="<?php echo $row_base['Clave_Producto']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Imagen:</td>
          <td><input type="text" name="Imagen" value="<?php echo $row_base['Imagen']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Nombre:</td>
          <td><input type="text" name="Nombre" value="<?php echo $row_base['Nombre']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Descripcion:</td>
          <td><input type="text" name="Descripcion" value="<?php echo $row_base['Descripcion']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Precio:</td>
          <td><input type="text" name="Precio" value="<?php echo $row_base['Precio']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">&nbsp;</td>
          <td><input type="submit" value="Update record"></td>
        </tr>
      </table>
      <p>&nbsp;      </p>
      <p>
      <table width="50%" border="0" align="center" bordercolor="#000000" bgcolor="#000000">
        <tr>
          <td width="23%" align="center"><?php if ($pageNum_base > 0) { // Show if not first page ?>
                <strong><a href="<?php printf("%s?pageNum_base=%d%s", $currentPage, 0, $queryString_base); ?>">First</a></strong><span class="style3">
                <?php } // Show if not first page ?>
          </span></td>
          <td width="31%" align="center"><?php if ($pageNum_base > 0) { // Show if not first page ?>
                <strong><a href="<?php printf("%s?pageNum_base=%d%s", $currentPage, max(0, $pageNum_base - 1), $queryString_base); ?>">Previous</a></strong><span class="style3">
                <?php } // Show if not first page ?>
          </span></td>
          <td width="23%" align="center"><?php if ($pageNum_base < $totalPages_base) { // Show if not last page ?>
                <span class="style7"><a href="<?php printf("%s?pageNum_base=%d%s", $currentPage, min($totalPages_base, $pageNum_base + 1), $queryString_base); ?>">Next</a>
                <?php } // Show if not last page ?>
          </span><span class="style3">          </span></td>
          <td width="23%" align="center"><?php if ($pageNum_base < $totalPages_base) { // Show if not last page ?>
                <span class="style5"><a href="<?php printf("%s?pageNum_base=%d%s", $currentPage, $totalPages_base, $queryString_base); ?>">Last</a>
                <?php } // Show if not last page ?>
          </span><span class="style3">          </span></td>
        </tr>
      </table>
      <input type="hidden" name="MM_update" value="form1">
      <input type="hidden" name="Categoria" value="<?php echo $row_base['Categoria']; ?>">
      </p>
    </form>
    <p>&nbsp;</p>
</center>
    </body>
</html>
<?php
mysql_free_result($base);
?>