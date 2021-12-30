<?php
$conexion=mysqli_connect("localhost","root","","bdsuper") or die("Problemas en la conexion");
if($_REQUEST['modo']=="NUEVO")
{	
$cadena='insert into productos (descripcion,rubro,stock,precio)
         values ("'.$_REQUEST['txt_descripcion'].'","'.$_REQUEST['txt_rubro'].'",
		'.$_REQUEST['txt_stock'].','.$_REQUEST['txt_precio'].')';		
		}

else
{
$cadena='update productos set descripcion="'.$_REQUEST['txt_descripcion'].'"
,rubro="'.$_REQUEST['txt_rubro'].'",stock='.$_REQUEST['txt_stock'].',
precio='.$_REQUEST['txt_precio'].' where idproducto='.$_REQUEST['idp'];
}	
mysqli_query($conexion,$cadena);

mysqli_close($conexion);

header('location:http://localhost/listado.php');
?>
<!-- <-?php?> esto abre el lenguaje de php para poder programar(sin el guion)  -->