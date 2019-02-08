<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

interface Veiculo{

	public function acelerar($velocidade);

	public function freiar ($velocidade);

	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){

		echo "O veiculo acelerou ate " . $velocidade . "km/h";
	}

	public function freiar ($velocidade){

		echo "O veiculo frenou ate " . $velocidade . "km/h";
	}

	public function trocarMarcha($marcha){

		echo "O veiculo engatou a marcha " . $marcha;
	}
}

class DelRey extends Automovel{

	public function empurrar(){


	}
}

$carro = new DelRey();

$carro->acelerar(200);