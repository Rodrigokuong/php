<?php
$codigo=$_REQUEST['idp'];
//$cadena="delete from productos where idproducto=".$codigo; elimina de forma permanente objetos de la tabla
$cadena='update productos set estados="Eliminado" where idproducto='.$codigo;
$conexion=mysqli_connect("localhost","root","","bdsuper") or die ("Problemas Con La Conexion");
mysqli_query($conexion,$cadena);
header('location:http://localhost/listado.php');
?>
