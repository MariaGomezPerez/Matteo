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
<title>Matteo's&Coffe- Nosotros</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
        <h1><span class="welcome">Compa&ntildeia</span> Matteo's&Coffe</h1>
        <div style="padding:20px 15px 10px 15px;">
            <!--226*150-->
          <div><img src="images/negocio.jpg" alt="" width="177" height="117" class="aboutus-img" /><br />
            <br />
            Ofreciendo salud, belleza y bienestar a través de la distribución de productos naturales certificados de alta calidad por medio de la formación de redes. <br />
            <br />
            <br />
              
            <div class="clear"></div>
           
          </div>
          <div class="clear"></div>
        
          <div>
              
            <h5></h5>
           <div class="aboutcolumn1">  <strong>Misión:<br>
               
               </strong> Ser la cafetería incubadora de negocios de la marca BODYLOGIC, con mayor crecimiento en Latinoamérica.</div>
               <div class="aboutcolumn2">  <strong>Visión:<br>
                   </strong>Ser la empresa de mayor creación de franquicias y asociados de la marca BODYLOGIC  en el estado de Chiapas y crecimiento sostenible en Latinoamérica.</div>

              <br>
              </div>
          </div>
          <div class="clear"></div>
          <div class="aboutcolumnzone">
            <div class="aboutcolumn1">
              <div>
                <h5>¿QUÉ ES BODYLOGIC?</h5>
                  <img src="images/photo-about.jpg" alt="" class="abouticon" /><p align="justify">Es una empresa 100% Mexicana; que nace en el 2010 por el deseo y visión de un grupo de inversionistas de la Industria Farmacéutica que se dieron a la tarea de fundar una empresa de redes de mercadeo; con la finalidad de brindar la oportunidad a toda persona que desee tener un negocio propio con una mínima inversión.</p>
                
              </div>
            </div>
            <div class="aboutcolumn2">
             
              <div>
                <h5>¿QUÉ ES PiSA?</h5>
                <p align="justify">Es la compañía farmacéutica, concebida para diseñar, estratégicamente, desde la idea del proyecto, hasta cristalizarlo en un producto o servicio integral y colocarlo en manos del consumidor final.<img src="images/PISA.jpg" alt="" class="abouticon" /> La experiencia de un sólido equipo apoyado con infraestructura y tecnología, así como capacidades de investigación, desarrollo, producción, logística y distribución, han permitido desarrollar la fórmula perfecta para ofrecer productos de calidad, respaldados en laboratorios 360° con capacidad de producir, en uno o en todos los procesos, diversas marcas reconocidas.</p>
                
            </div>
            </div>
            <div class="clear"></div>
            
           
            <div class="clear"></div>
          </div>
         
        </div>
      </div>
       <div class="menuBar2">
   
  
  </div>
    </div>
   
 
</div>
</body>
</html>
