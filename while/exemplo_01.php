<?php 

$condicao = true;

while ($condicao){
	//Escolhe um número randomico entre 1 e 10
	$numero = rand(1,10);

	if($numero === 3){

		echo "Três";
		$condicao=false;
	}

	echo $numero . " ";
}

 ?>