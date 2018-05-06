<?php
session_start();
if($_SESSION["Usuario"] == ""){
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Coffee Maker - Services</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="./css/estilos2.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
    
   

</head>

<body>
    <div id="wrapper">
  <div id="banner">
    <div id="logo"></div>
  </div>
  <div class="menuBar">
    <ul>
      <li class="first"><a class="current" href="index.php">Inicio</a>
      <li><a href="nosotros.php">Nosotros</a></li>
      <li><a href="local.php">Casa&Local</a></li>
      <li><a href="galeria.php">Menú</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </div>
  <div class="container1_inner">
    <div class="container2r">
      <div class="workarea_inner">
        <h1><span class="welcome">Menú</span> </h1>
        <div style="padding:0 15px 20px 15px;">
          <div><strong></strong> <br />
            <br /> <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="container">
                 
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos LIMIT 16, 8")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="producto">
			<center>
				<img src="./productos/<?php echo $f['Imagen'];?>"><br>
				<h5><span><?php echo $f['Nombre'];?></span><br></h5>
                           <p class="p1"> <span>Relleno con: <?php echo $f['Descripcion'];?></span></p>
                            <p class="p2"><strong class="color-2"> <span>Precio: $<?php echo $f['Precio'];?></span> </strong></p>
				 <a class="button-1" href="./carritodecompras.php?Clave_Producto=<?php  echo $f['Clave_Producto'];?>">Agregar al Carrito</a>
			</center>
		</div>
	<?php
		}
	?>
		
		

		
	</section>
                     
                     
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
    <center><a href="galeria2.php">Anterior/</a>
   <a href="#">/</a></center>  
  </div>

      
</body>
</html>