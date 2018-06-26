<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
	public function acelerar($velocidade){

		echo "O veiculo acelerou até " . $velocidade . "km/h";
	}

	public function freiar($velocidade){

		echo "O veiculo frenou até " . $velocidade . "km/h";
	}

	public function trocarMarcha($marcha){

		echo "O veiculo engatou a marcha" . $marcha;
	}

}

class DelRey extends Automovel{

	public function empurrar(){


	}


}

//Não pode implementar uma classe abstrata diretamente.
//$carro = new Automovel();

//Toda classe abstrata precisa de uma outra classe extendida a classe abstrata para implemtar seus atributos.
$carro = new DelRey();

$carro->acelerar(200);

 ?>