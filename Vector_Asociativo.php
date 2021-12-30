<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectores Asociativos</title>
</head>
<body>
    <?php
    echo "<h2>Creamos un Vector asociativo</h2>";
    $registro['Apellido']="Almada";
    $registro['Nombre']="Alejandro";
    $registro['Edad']=15;
    $registro['Sexo']="M";
    echo "Ya creamos el VECTOR ASOCIATIVO, ahora lo mostramos";
    echo "<br>";
    echo "<b>Apellido: </b>".$registro['Apellido'];
    echo "<br>";
    echo "<b>Nombre: </b>".$registro['Nombre'];
    echo "<br>";
    echo "<b>Edad: </b>".$registro['Edad'];
    echo "<br>";
    echo "<b>Sexo: </b>".$registro['Sexo'];
    echo "<br>";
    ?>
</body>
</html>