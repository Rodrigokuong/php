<?php
$positivo="";
$negativo="";
$n1=$_REQUEST['txt_n1'];
$n2=$_REQUEST['txt_n2'];
$resultado=0;
$opreacion=$_REQUEST['sel_operacion'];
if(isset($_REQUEST['chk_positivo'])){
$positivo=$_REQUEST['chk_positivo'];
}
if(isset($_REQUEST['chk_negativo'])){
$negativo=$_REQUEST['chk_negativo'];
}
if($opreacion=='suma'){
 $resultado=$n1+$n2;
}
if($opreacion=='resta'){
    $resultado=$n1-$n2;
}
if($opreacion=='multiplicacion'){
    $resultado=$n1*$n2;
   }
if($opreacion=='division'){
    $resultado=$n1/$n2;
}
echo "El Resultado Es: ".$resultado;
echo "<br>";
echo $positivo;
echo "<br";
echo $negativo;
?>