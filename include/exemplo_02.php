<?php 

//Include tenta executa mesmo que com erro 
//include "inc/exemplo_01.php";

//require só executa se encontrar o arquivo e não possuir erro

//Require Once chama apenas uma vez o require ou include mesmo que contenha a chamada mais de uma vez

//include_once "inc/exemplo_01.php";
require_once "inc/exemplo_01.php";

$resultado = somar(10, 20);

echo $resultado;

 ?>