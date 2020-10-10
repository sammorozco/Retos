<?php

//Arreglo indexado
$productos=array("lentejas","papa","huevos");
print_r($productos);
echo("<br>");
echo($productos[1]);
echo("<br>");

//Arreglo asociativos
$productosAsociativos=array("producto1"=>"lentejas","producto2"=>"papa", "producto3"=>"huevos");
print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto2"]);

//Bucle for
echo("<br>");
echo("<br>");
for($centinela=0; $centinela<count($productos);$centinela++){
    echo($productos[$centinela]);
    echo("<br>");
    
}
//Bucle forEach
echo("<br>");
echo("<br>");
foreach($productosAsociativos as $clave=>$valor){
    echo($clave);
    echo("<br>");
    echo($valor);
}

?>
