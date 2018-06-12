<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

//Aproveita a frase até uma determinada string
$q = strpos($frase, $palavra);

//Retorna um determinado trexo partindo da pasição inicial até a final
$texto = substr($frase, 0, $q);

var_dump($texto);

//Retorna a paritr de um determinado ponto até o final. strlen conta o número de caracter da string.
$text2 = substr($frase, $q+ strlen($palavra), strlen($frase));

echo "<br>";

var_dump($text2);

 ?>