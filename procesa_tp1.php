<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa PHP</title>
</head>
<body>
    <?php
    $n1=$_REQUEST['txt_n1'];
    $n2=$_REQUEST['txt_n2'];
    $op=$_REQUEST['operacion'];
    $hs=$_REQUEST['estilo'];
    //echo "<br>NUMERO 1: ".$n1;
    //echo "<br>NUMERO 2: ".$n2;
    //echo "<br>OPERACION: ".$op;
    if($op=="suma"){
        $s=$n1+$n2;
    }
    if($op=="resta"){
        $s=$n1-$n2;
    }
    if($op=="multiplicacion"){
        $s=$n1*$n2;
    }
    if($op=="division"){
        $s=$n1/$n2;
    }
    if($hs=="h1"){
    echo "<h1><br>NUMERO 1: </h1>".$n1;
    echo "<h1><br>NUMERO 2: </h1>".$n2;
    echo "<h1><br>OPERACION: </h1>".$op;
    echo "<h1><br>El Resultado Es: </h1>".$s;
    }
    if($hs=="h2"){
    echo "<h2><br>NUMERO 1: </h2>".$n1;
    echo "<h2><br>NUMERO 2: </h2>".$n2;
    echo "<h2><br>OPERACION: </h2>".$op;
    echo "<h2><br>El Resultado Es: </h2>".$s;  
    }
    if($hs=="h3"){
    echo "<h3><br>NUMERO 1: </h3>".$n1;
    echo "<h3><br>NUMERO 2: </h3>".$n2;
    echo "<h3><br>OPERACION: </h3>".$op;
    echo "<h3><br>El Resultado Es: </h3>".$s;        
    }
    //echo "<br>El Resultado Es: ".$s;
    ?>
</body>
</html>
<!--creamos una variable "$n1" y con el comando "$_REQUEST['']" obtenemos los datos de otro archivo php
dentro de los corchetes "['']" ponemos el nombre de la variable del cual queremos obtener los datos
"txt_n1", si o si tenemos que ponerle nombre a la caja de texto o otro objeto para poder llamarlo
"name:"-->