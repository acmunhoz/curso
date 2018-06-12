<?php 
	
$nome = "anderson cleiton";

//tudas as letras maiusculas
$nome = strtoupper($nome);

echo $nome;

echo "<br />";

//todas as letras minusculas
$nome = strtolower($nome);

echo $nome;

echo "<br />";

//apenas a primeira letra maiuscula
echo ucfirst($nome);

echo "<br>";

//As primeiras letras maiusculas
echo ucwords($nome);

 ?>