<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar</title>
</head>
<body>
    <?php
    $id=$_REQUEST['txt_idcliente'];
    $conexion=mysqli_connect("localhost","root","","bdsuper") or die("Problemas en la conexion");
    $cadena="select idcliente, apenom, fecha_nac, barrio, sexo from clientes where idcliente=".$id;
    $registros=mysqli_query($conexion,$cadena);
    if($reg=mysqli_fetch_array($registros)){
        echo "CLIENTE: ".$reg['idcliente'];
        echo "<br>";
        echo "APELLIDO Y NOMBRE: ".$reg['apenom'];
        echo "<br>";
        echo "FECHA DE NACIMIENTO: ".$reg['fecha_nac'];
        echo "<br>";
        echo "BARRIO: ".$reg['barrio'];
        echo "<br>";
        echo "SEXO: ".$reg['sexo'];
        echo "<br>";
    }
    else {
     echo "<h2>REGISTRO NO ENCONTRADO</h2>";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>