<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

class Pessoa{

	public $nome = "Camila";
	protected $idade = 18;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome;
		echo $this->idade;
		echo $this->senha;
	}

}

$objeto = new Pessoa();

echo $objeto->nome . "<br/>";