<?php
session_start();
					$arreglo=$_SESSION['carrito'];
					$total=0;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['clave_producto']==$_POST['Clave_Producto']){
							$numero=$i;
						}
					}
					$arreglo[$numero]['Cantidad']=$_POST['Cantidad'];
					for($i=0;$i<count($arreglo);$i++){
						$total=($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])+$total;
					}
					$_SESSION['carrito']=$arreglo;
					echo $total;

?>