<?php  

include('sopa.php');


//instanciar un objeto de la clase SOPA
//Los objetos son "copias" de la clase
$sopaTomate= new Sopa();


//acceder a un metodo de la clase
$sopaTomate->prepararSopa();


//acceder y modificar un atributo de la clase
$sopaTomate->tipo="SOPA DE TOMATE";
echo("<br>");
echo($sopaTomate->tipo);

$sopaTomate->cantidadAceite="2 cucharadas aceite";
echo("<br>");
echo($sopaTomate->cantidadAceite);


?>