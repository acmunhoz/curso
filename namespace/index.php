<?php 

require_once("config.php");
	
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Anderson Cleiton");
$cad->setEmail("anderson.munhoz@webjump.com.br");
$cad->setSenha("123456");
$cad->registrarVenda();


 ?>