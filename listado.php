<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <?php if(isset($_REQUEST['idp'])){
    $titulo="Editando Registro";
  }
    else{
      $titulo="Nuevo Producto";
    }
  ?>
<table class="table table-bordered">
<thead>
<tr>
<td>ID PRODUCTO</td><td>DESCRIPCION</td><td>RUBRO</td><td>STOCK</td>
<td>PRECIO</td><td>EDITAR</td><td>ELIMINAR</td>
</tr>
<tbody>
 <?php
  $conexion = mysqli_connect("localhost", "root", "", "bdsuper") or
    die("Problemas con la conexión");
	
  $registros = mysqli_query($conexion, 'select idproducto,descripcion,
rubro,stock,precio from productos where estados="ACTIVO"') or
    die("Problemas en el select:" . mysqli_error($conexion));
	
  while ($reg = mysqli_fetch_array($registros)) 
  {
	echo "<tr>";  
  echo "<td>".$reg['idproducto']."</td>";
	echo "<td>".$reg['descripcion']."</td>";
	echo "<td>".$reg['rubro']."</td>";
  echo "<td>".$reg['stock']."</td>";
	echo "<td>".$reg['precio']."</td>";
	echo '<td><a href="formulario.php?idp='.$reg['idproducto'].'" class="btn btn-info">EDITAR</td>';
	echo '<td><a href="eliminar.php?idp='.$reg['idproducto'].'" class="btn btn-danger">ELIMINAR</td>';
	echo "</tr>";
  }	
  echo "</tbody>";
  echo "</table>";
  echo '<a href="formulario.php" class="btn btn-primary">NUEVO PRODUCTO</a>';
  mysqli_close($conexion);
  ?>
</div>
</body>
</html>