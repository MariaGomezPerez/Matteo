<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$server="localhost";
	$username="root";
	$password="";
	$db='CMatteoCoffe';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>