<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suma</title>
</head>
<body>
    <form action="procesa_operaciones.php" method="post">
    Numero 1<input type="number" min="1" max="10" step="1" name="txt_n1">
    <br>
    Numero 2<input type="number" min="1" max="10" step="1" name="txt_n2">
    <br>
    Operacion
    <select name="sel_operacion">
        <option value="suma">SUMA</option>
        <option value="resta">RESTA</option>
        <option value="multiplicacion">MULTIPLICACION</option>
        <option value="division">DIVISION</option> 
    </select>
    <br>
    <input type="checkbox" value="pos" name="chk_positivo">POSITIVO
    <br>
    <input type="checkbox" value="neg" name="chk_negativo">NEGATIVO
    <br>
    <input type="submit" value="Calcular">
    </form>
    
</body>
</html>