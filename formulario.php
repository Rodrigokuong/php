<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php if(isset($_REQUEST['idp'])){
		$titulo="EDITANDO REGISTRO"; 
    $conexion = mysqli_connect("localhost", "root", "", "bdsuper") or
    die("Problemas con la conexión");
    $cadena='select * from productos where idproducto='.$_REQUEST['idp'];
    $registros= mysqli_query($conexion,$cadena);
    $reg=mysqli_fetch_array($registros);
    }
	  else
	    {  
        $titulo="NUEVO PRODUCTO";  
        $reg['descripcion']="";
        $reg['rubro']="";
        $reg['stock']="";
        $reg['precio']="";
      }
?>
<div class="panel panel-default">
<div class="panel-heading"><?PHP echo $titulo;?></div>
<div class="panel-body">
<form class="form" action="procesa.php" method="post">

    <label>Descripcion</label>
    <input class="form-control" type="text" name="txt_descripcion" value="<?php echo $reg['descripcion'];?>">
    <br>
    <label>Rubro</label> 
    <input class="form-control" type="text" name="txt_rubro" value="<?php echo $reg['rubro']; ?>">
    <br>
    <label>Stock</label> 
    <input class="form-control" type="text" name="txt_stock" value="<?php echo $reg['stock']; ?>">
    <br>
    <label>Precio</label> 
    <input class="form-control" type="text" name="txt_precio" value="<?php echo $reg['precio']; ?>">
    <br>
    <?php
    if(isset($_REQUEST['idp'])){
    echo '<input type="hidden" name="modo" value="Edicion">';
    echo '<input type="hidden" name="idp" value="'.$reg['idproducto'].'">';
    }
    else{
    echo '<input type="hidden" name="modo" value="Nuevo">';
    }
    ?>
    <input class="btn btn-primary" type="Submit" value="Guardar">

</form>
</div>
</div>
</div>
</body>