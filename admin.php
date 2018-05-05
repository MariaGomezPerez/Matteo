
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="./css/estilos1.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
   <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
   

</head>
<body>
    <div id="wrapper">
  <div id="banner">
    <div id="logo"></div>
  </div>
  <div class="menuBar">
   <ul>
	    <li><a href="./">Inicio</a></li>
		<li><a href="admin.php">Ultimas Compras</a></li>
	    <li><a href="admin/agregarproducto.php" class="selected">Agregar</a></li>
	    <li><a href="admin/modificar.php" >Modificar</a></li>
	    <li><a href="login/cerrar.php">Salir</a></li>
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

	<section>
	

	<center><h1>Últimas Compras</h1></center>
	<table border="0px" width="100%">	
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>	

		<?php
			$re=mysqli_query("select * from compras");
			$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<td><img src="./productos/'.$f['Imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['Nombre'].'</td>
						<td>'.$f['Precio'].'</td>
						<td>'.$f['Cantidad'].'</td>
						<td>'.$f['Subtotal'].'</td>

					</tr>';
			}
		?>
	</table>
	</section>
</body>
</html>