<?

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

}


class CPF extends Documento{

	public function validar():bool{

		$numeroCPF = $this->getNumero();

		//Validação

		return true;
	}
}


$doc = new CPF();

$doc->getNumero("21545445454545");

var_dump($doc->validar());

echo $doc->getNumero();

