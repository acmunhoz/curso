<?php 

$name = "imagens";

if(!is_dir($name)){
	mkdir($name);
	echo "Diretório $name criado com sucesso";
}else{
	rmdir($name);
	echo "Já existe este diretório: $name foi removido!";
}

 ?>