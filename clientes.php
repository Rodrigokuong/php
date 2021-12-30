<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de un Cliente</title>
</head>
<body>
    <form action="buscar.php" method="POST">
        Ingrese el co&acute;digo del Cliente<!--&acute nos permite ponerle una tilde a una letra -->
        <input type="number" min="0" name="txt_idcliente">
        <br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>