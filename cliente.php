<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="contenedor">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID CLIENTE</td><td>APELLIDO Y NOMBRE</td><td>FECHA DE NACIMIENTO</td><td>BARRIO</td><td>SEXO</td>
                <td>EDITAR</td><td>ELIMINAR</td>
            </tr>
            <tbody>
                <?php
                $conexion=mysqli_connect("localhost","root","","bdsuper") or die("Problemas En La Conexion");

                $tabla= mysqli_query($conexion,'select idcliente,apenom,fecha_nac,barrio,sexo from clientes where estados="ACTIVO"') or die ("Problemas en el select:".mysqli_error($conexion));

                while($reg= mysqli_fetch_array($tabla)){
                    echo "<tr>";
                    echo "<td>".$reg['idcliente']."</td>";
                    echo "<td>".$reg['apenom']."</td>";
                    echo "<td>".$reg['fecha_nac']."</td>";
                    echo "<td>".$reg['barrio']."</td>";
                    echo "<td>".$reg['sexo']."</td>";
                    echo '<td><a href="formulario.php?idc='.$reg['idcliente'].'" class="btn btn-info">EDITAR</td>';
	                echo '<td><a href="eliminar.php?idc='.$reg['idcliente'].'" class="btn btn-danger">ELIMINAR</td>';
	                echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo '<a href="formulario.php" class="btn btn-primary">NUEVO CLIENTE</a>';
                echo '<b href="buscar.php" class="btn btn-info">BUSCAR CLIENTE</b>';
                mysqli_close($conexion);
                ?>
    </div>
</body>
</html>