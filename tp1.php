<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo PHP</title>
</head>
<body>
    <?php echo "<h2>CURSO PHP</h2>"; 
    $a=20;
    $b=50;
    $suma=$a+$b;
    $producto=$a*$b;
    echo "Suma: ".$suma;
    echo "<br>";
    echo "Producto: ".$producto;
    ?>
    <form action="procesa_tp1.php" method=post>
    Numero 1: <input type="number" name="txt_n1">
    <br>
    Numero 2: <input type="number" name="txt_n2">
    <br>
    <select name="operacion">
        <option value="suma">SUMA</option>
        <option value="resta">RESTA</option>
        <option value="multiplicacion">MULTIPLICACION</option>
        <option value="division">DIVISION</option>
    </select>
    <br>
    Estilo:
    <input type="radio" name="estilo" value="h1">TITULO H1
    <input type="radio" name="estilo" value="h2">TITULO H2
    <input type="radio" name="estilo" value="h3">TITULO H3
    <button type="submit">Enviar datos</button>
    </form>
</body>
</html> 
<!-- sirve para mostrar datos "echo"-->
<!--sirve para crear variables "$"-->
<!--"action=procesa_tp1.php" envia los datos a un servidos llamado procesa_tp1.php,
 puede ser cualquier otra, sirve como para linkear los datos a otro archivos-->
