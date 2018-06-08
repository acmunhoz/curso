<?php
	//Tipos de dados
	
	//simples
	$nome="Anderson";
	$site='www.meusite.com.br';

	$ano=1988;
	$salario = 5500.00;
	$bloqueado = false;

	//Composto

	//Array
	$frutas = array("abacaxi","laranja","manga");

	echo $frutas[2];

	//Object
	$nascimento = new DateTime();

	//var_dump($nascimento);

	
	//resource
	$arquivo = fopen("exemplo_03.php", "r");

	//var_dump($arquivo);

	$nulo=null;

?>