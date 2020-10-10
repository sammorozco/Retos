<?php
//Arreglos de una dimensión (vector) indexado
$precios=array(1600,5000,2500);
$nombres=array("arroz","salchicha","azucar");
$marca=array("diana","zenu","incauca");
echo("<br>");

//Arreglos en múltiples dimensiones (matriz) indexado
$productos=array(
    array("arroz",1600,"diana"),
    array("salchicha",5000,"zenu"),
    array("azucar",2500,"incauca")
);
print_r($productos);
echo("<br>");

//Arreglos de una dimensión (vector) asociativo
$precios=array("precio1"=>1600,"precio2"=>5000,"precio3"=>2500);
$nombres=array("arroz","salchicha","azucar");
$marca=array("diana","zenu","incauca");
echo("<br>");
//Arreglos en múltiples dimensiones (matriz) asociativo
$productos=array(
    "producto1"=>array("arroz",1600,"diana"),
    "producto2"=>array("salchicha",5000,"zenu"),
    "producto3"=>array("azucar",2500,"incauca")
);
print_r($productos);


?>