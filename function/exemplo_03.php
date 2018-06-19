<?php 

//Parametros obrigatorios sempre a esquerda
function ola($texto, $periodo = "Bom dia"){

	return "Oi $texto $periodo<br>";
}

echo ola("Lindo");
echo ola("Function","Boa noite!");
echo ola("Cheta", "Boa tarde!");

 ?>