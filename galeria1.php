<?php
session_start();
if($_SESSION["Usuario"] == ""){
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Coffee Maker - Services</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    
    <link rel="stylesheet" href="css/css2/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/css2/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/css2/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/css2/prettyPhoto.css" type="text/css" media="screen">
    <script src="js/js2/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/js2/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/js2/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/js2/FF-cash.js" type="text/javascript"></script>  
    <script src="js/js2/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <script src="js/js2/hover-image.js" type="text/javascript"></script>
    <script src="js/js2/jquery.easing.1.3.js" type="text/javascript"></script>  
    <script src="js/js2/jquery.bxSlider.js" type="text/javascript"></script> 
     <script type="text/javascript">
        
		$(document).ready(function() {
			$('#slider-2').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 4
			});
			$("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
		}); 
	</script>
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
            	
                <div id="slider-2">
                	<div>
                    	<div class="p4">
      <section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
		
		
	</section>
                  <div class="producto">
	 
     <figure><a class="lightbox-image" href="productos/empanada.png" data-gal="prettyPhoto[prettyPhoto]"> <img src="productos/<?php echo $f['Imagen'];?>" width="210" height="120" alt=""></a></figure>
                            <h5><span><?php echo $f['Nombre'];?></span><br></h5>
                           <p class="p1"> <span>Relleno con: <?php echo $f['Descripcion'];?></span></p>
                            <p class="p2"><strong class="color-2"> <span>Precio: $<?php echo $f['Precio'];?></span> </strong></p>
                            
     <a class="button-1" href="./carritodecompras.php?Clave_Producto=<?php  echo $f['Clave_Producto'];?>">Agregar al Carrito</a>
                        </div>
                            </div>
                        	         
		
         <figure><a class="lightbox-image" href="productos/<?php echo $f['Imagen'];?>" data-gal="prettyPhoto[prettyPhoto]"><img src="productos/<?php echo $f['Imagen'];?>" width="210" height="120" alt=""></a></figure>
                           <h5><span><?php echo $f['Nombre'];?></span><br></h5>
                           <p class="p1"> <span>Relleno con: <?php echo $f['Descripcion'];?></span></p>
                            <p class="p2"><strong class="color-2"> <span>Precio: $<?php echo $f['Precio'];?></span> </strong></p>
                            
     <a class="button-1" href="./carritodecompras.php?Clave_Producto=<?php  echo $f['Clave_Producto'];?>">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen1.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen1.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Pastel de zanahoria</h5>
                            <p class="p1">Masa suave de la casa que concentra <br>el delicioso sabor de la zanahoria<br> mezclada con pequeños y tiernos<br> trozos de zanahorias frescas.</p>
                            <p class="p2"><strong class="color-2">Precio: $150.50</strong></p>
                            <a class="button-1" href="Datos/productos3.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/imagen11.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen11.jpg" width="210" height="120"  alt=""></a></figure>
                        <h5>Pay de piña</h5>
                        <p class="p1">Masa esponjosa con relleno de mermelada de pina con trositos.</p>
                        <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                        <a class="button-1" href="Datos/productos4.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen12.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen12.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Pay de limon</h5>
                            <p class="p1">Masa esponjosa de limon y crujiente.</p>
                            <p class="p2"><strong class="color-2">Precio: $105.95</strong></p>
                            <a class="button-1" href="Datos/productos5.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/slider-img2.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Copa de Frutillas</h5>
                        <p class="p1">Ricas frutas resien cortadas y frescas.</p>
                        <p class="p2"><strong class="color-2">Precio: $50.95</strong></p>
                        <a class="button-1" href="Datos/productos6.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/slider-img3.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/slider-img3.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Pastel de fresa</h5>
                            <p class="p1">Rico pastel de fresas<br> con trozitos.</p>
                            <p class="p2"><strong class="color-2">Precio: $150.00</strong></p>
                            <a class="button-1" href="Datos/productos7.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/img11.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/img11.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Pay de chocolate</h5>
                        <p class="p1">Masa suave y esponjosa de bizcochuelo mojado en salsa de tres leches, cubierto con crema de leche, chocolate y punto de glasse de fresa.</p>
                        <p class="p2"><strong class="color-2">Precio: $200.50</strong></p>
                        <a class="button-1" href="Datos/productos8.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/img10.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/img10.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>LOVE de Fresas </h5>
                            <p class="p1">Copa de yoguth de fresas con sus trozitos.</p>
                            <p class="p2"><strong class="color-2">Precio: $100.95</strong></p>
                            <a class="button-1" href="Datos/productos9.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/imagen9.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen9.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Empanadas de manjar</h5>
                        <p class="p1">Masa esponjosa y relleno de manjar.</p>
                        <p class="p2"><strong class="color-2">Precio: $150.00</strong></p>
                        <a class="button-1" href="Datos/productos10.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen8.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen8.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Bimbuñuelos</h5>
                            <p class="p1">Masa crujiente y duro de romper <br>con una sola mordida.</p>
                            <p class="p2"><strong class="color-2">Precio: $20.50</strong></p>
                            <a class="button-1" href="Datos/productos11.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/imagen7.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen7.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Galletas de chocolate</h5>
                        <p class="p1">Masa crujiente<br> con crispas de chocolate.</p>
                        <p class="p2"><strong class="color-2">Precio: $50.50</strong></p>
                        <a class="button-1" href="Datos/productos12.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen6.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen6.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Bombones de chocolate</h5>
                            <p class="p1">Masa esponjosa con relleno de chocolate.</p>
                            <p class="p2"><strong class="color-2">Precio: $30.95</strong></p>
                            <a class="button-1" href="Datos/productos13.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/imagen5.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen5.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Pastel de chocolate con coco y almendras</h5>
                        <p class="p1">Masa crujiente con chocolate y rayado de coco con almendras.</p>
                        <p class="p2"><strong class="color-2">Precio: $200.95</strong></p>
                        <a class="button-1" href="Datos/productos14.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen4.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen4.jpg"  width="210" height="120" alt=""></a></figure>
                            <h5>Pastel de tres leches</h5>
                            <p class="p1">Masa esponjosa con 3 capas de leche.</p>
                            <p class="p2"><strong class="color-2">Precio: $350.95</strong></p>
                            <a class="button-1" href="Datos/productos15.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/imagen3.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen3.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Pastel de flan con chocolate</h5>
                        <p class="p1">Patel de dos capas mitad de flan y chocolate y esponjoso.</p>
                        <p class="p2"><strong class="color-2">Precio: $260.95</strong></p>
                        <a class="button-1" href="Datos/productos16.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen25.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen25.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Cupcakes </h5>
                            <p class="p1">Mini ponqués de masa suave y esponjosa de vainilla ó chocolate, cubiertos con un delicado remolino de crema de sabores adornado con chips.</p>
                            <p class="p2"><strong class="color-2">Precio: $42.95</strong></p>
                            <a class="button-1" href="Datos/productos17.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/imagen24.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen24.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Bolitas de chocolate blanco y negro</h5>
                        <p class="p1">Masa esponsoja de chocolate y crujiente.</p>
                        <p class="p2"><strong class="color-2">Precio: $50.95</strong></p>
                        <a class="button-1" href="Datos/productos18.php">Agregar al Carrito</a>
                    </div>
                    <div>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/postres/imagen23.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/imagen23.jpg" width="210" height="120" alt=""></a></figure>
                            <h5>Panqueques de chocolate</h5>
                            <p class="p1">Pan esponjosa y jugosa de chocolate.</p>
                            <p class="p2"><strong class="color-2">Precio: $100.50</strong></p>
                            <a class="button-1" href="Datos/productos19.php">Agregar al Carrito</a>
                        </div>
                        <figure><a class="lightbox-image" href="images/postres/img12.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/postres/img12.jpg" width="210" height="120" alt=""></a></figure>
                        <h5>Pay de fresas</h5>
                        <p class="p1">Masa de hojaldre crocante y fresca rellena de crema de leche, y decorada con azúcar pulverizada y un punto de glasse de fresa..</p>
                        <p class="p2"><strong class="color-2">Precio: $300.50</strong></p>
                        <a class="button-1" href="Datos/productos20.php">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
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
        </div>
      </div>
    </div>
  </div>
  <div class="menuBar2">
   
  </div>


    </body>
</html>
