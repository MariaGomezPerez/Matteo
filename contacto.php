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
<title>Matteo's&Coffe- Contacto</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    
    <link rel="stylesheet" href="./css/css2/style2.css" type="text/css" media="screen">
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
        <h1><span class="welcome">Contacto</span></h1>
        <div style="padding:0 15px 20px 15px;">
          <div> <strong> <br />
            <center> Un lugar para que tú estés bien y te sientas bien con Bodylogic una manera deliciosa de cuidarte!!</center></strong><br />
            <br />
            <center>Ven a conocernos cual quier duda comunicarse a los numeros que aparecen abajo!!</center> </div>
          <div> <br />
            <h6>
Formulario de contacto:</h6>
            <form action="http://all-free-download.com/free-website-templates/" method="post">
              <table width="97%">
            
                <tr>
                  <td align="left" valign="top" class="body" id="Contact"><strong>Nombre:</strong></td>
                  <td align="left" valign="top"><input name="Name" type="text" size="40" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Address"><strong>Dirección: </strong></td>
                  <td align="left" valign="top"><input name="Address" type="text" size="40" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Phone"><strong> Télefono: </strong></td>
                  <td align="left" valign="top"><input name="Phone" type="text" size="40" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Email"><strong> E-mail: </strong></td>
                  <td align="left" valign="top"><input name="Email" type="text" size="40" /></td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="body" id="Comments"><strong> Preguntas / Comentarios: </strong></td>
                  <td align="left" valign="top"><textarea name="comments" cols="32" rows="6"></textarea></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </table>
                 
            </form>
               <div class="buttons">
       
        
                                        
         <a class="button-2" href="contacto.php" onclick="alert('Mensaje Enviado')" >Enviar</a>
    
           
                                    </div> 
          </div>
          <div> <br />
            <h6>Información del contacto: </h6>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.5109427921598!2d-93.11620458557141!3d16.751236488462748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd88bb8a225ed%3A0xe16191b810481385!2sMATTEO%C2%B4S+COFFEE!5e0!3m2!1ses-419!2smx!4v1523036558231" width="570" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
           
            
            <br />
                <div class="aboutcolumn3">
            <p> <samp><img src="images/ico-dire.png" alt="" width="20" height="16" hspace="2" />Dirección:</samp>3 ote ebtre 2 y 3 sur  <br />
            Centro de Tuxtla Gutiérrez<br />
            Chiapas<br />
                <span><img src="images/ico-phone.png" alt="" width="20" height="16" hspace="2" /> Teléfono:</span> (69) 08-611<br />
            
              <span><img src="images/ico-fax.png" alt="" width="20" height="16" hspace="2" /> Celular:</span> (961) 210-9142<br />
                      (961) 269-7378<br/>
              <span><img src="images/ico-website.png" alt="" width="20" height="16" hspace="2" /> Website:</span> <a href="http://www.bodylogicglobal.com/">www.bodylogicglobal.com/</a><br />
              <span><img src="images/ico-email.png" alt="" width="20" height="16" hspace="2" /> E-mail:</span> <a href="#">MatteoCoffe@gmail.com</a><br />
              <span><img src="images/ico-twitter.png" alt="" width="20" height="16" hspace="3" /> <a href="#">Follow</a> on Facebook</span><br />
            </p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="menuBar2">
    
  </div>
</div>
</body>
</html>
