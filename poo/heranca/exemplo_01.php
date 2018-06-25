<?php 

class Documento{

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($n){

		$this->numero = $n;
	}

}

class Cpf extends Documento{

	public function validar():bool{

		//validar cpf

		$numeroCPF = $this->getNumero();

		return true;

	}


}

$doc = new Cpf();

$doc->setNumero("35898937889");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

 ?>