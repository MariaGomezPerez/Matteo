<?php
session_start();
if($_SESSION["Usuario"] == ""){
    header("Location:login.php");
    exit();
}
?>
<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['Clave_Producto'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['clave_producto']==$_GET['Clave_Producto']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from productos where Clave_Producto=".$_GET['Clave_Producto']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['Nombre'];
							$precio=$f['Precio'];
							$imagen=$f['Imagen'];
						}
						$datosNuevos=array('clave_producto'=>$_GET['Clave_Producto'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['Clave_Producto'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where Clave_Producto=".$_GET['Clave_Producto']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['Nombre'];
				$precio=$f['Precio'];
				$imagen=$f['Imagen'];
			}
			$arreglo[]=array('clave_producto'=>$_GET['Clave_Producto'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Coffee Maker - Carrito de Compras</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
   
   
    
	<link rel="stylesheet" type="text/css" href="./css/estilos2.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
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
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	       ?>
				<div class="producto">
					<center>
						<img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
						<span ><?php echo $datos[$i]['Nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad: 
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['clave_producto'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['clave_producto']?>">Eliminar</a>
					</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 Clave_Producto="total">Total: '.$total.'</h2></center>';
			if($total!=0){
					//echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>';
			?>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="formulario">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="business" value="tu_correo_paypal@gmail.com">
					<input type="hidden" name="currency_code" value="MXN">
					
					<?php 
						for($i=0;$i<count($datos);$i++){
					?>
						<input type="hidden" name="item_name_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Nombre'];?>">
						<input type="hidden" name="amount_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Precio'];?>">
						<input	type="hidden" name="quantity_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Cantidad'];?>">	
					<?php 
						}
					?>
						

					<center><input type="submit" value="comprar" class="aceptar" style="width:200px"></center>
			</form>
			<?php
			}
			
		?>
		<center><a href="galeria.php">Ver catalogo</a></center>

		
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
     
  </div>
</body>
</html>