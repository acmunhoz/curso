<?php

	$nome = "Anderson";

	function teste(){
		global $nome;
		echo $nome;
	}

	function teste2(){
		
		$nome="Munhoz";
		echo "Agora no teste 2".$nome;

	}

	teste();
	teste2();
?>