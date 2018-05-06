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
<title>Coffee Maker - Projects</title>
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
        <h1><span class="welcome">Local</span> </h1>
        <div style="padding:0 15px 20px 15px;">
          <div class="ourprojectrow">
            <h6> <br />
              </h6>
            <div> <img src="images/img1.JPG" alt="" width="310
                " height="239" class="project-img" /> 
                <img src="images/img2.JPG" alt="" width="310" height="239" class="project-img2" />
                <img src="images/img3.JPG" alt="" width="310" height="239" class="project-img3" />
              <div class="clear"></div>
            </div>
            <br />
            <div> 
              <div class="clear"></div>
            </div>
          </div>
          <div class="ourprojectrow">
            <h6> </h6>
            <div> <img src="images/img4.JPG" alt="" width="310" height="239" class="project" /> 
           
                <img src="images/img5.JPG" alt="" width="310" height="239" class="project2" /> 
                <img src="images/img6.JPG" alt="" width="310" height="239" class="project3" /> 
              <div class="clear"></div>
            </div>
            <br />
            
              <div class="clear"></div>
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
