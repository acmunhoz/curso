<?php 

function incluirClasses($nomeClasse){

	if(file_exists($nomeClasse) === true){
		
		require_once($nomeClasse.".php");

	}

}

spl_autoload_register("incluiClasses");


spl_autoload_register(function ($nomeClasse){

	if("abstrata".DIRECTORY_SEPARATOR.$nomeClasse) === true){
		
		require_once("abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php");

	}

});

$carro = new DelRey();

$carro->acelerar(80);


 ?>