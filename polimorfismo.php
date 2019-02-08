<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

abstract class Animal{

	public function falar(){
		return "som";
	}

	public function mover(){
		return "anda";
	}
}

class Cachorro extends Animal{

	public function falar(){  //o polimorfismo acontece quando temos métodos de mesmo na classe pai e filha, mas se diferem em implemenração.
		return "late";
	}
}

class Gato extends Animal{

	public function falar(){
		return "mia";
	}

}

class Passaro extends Animal{

	public function falar(){
		return "canta";
	}

	public function mover(){
		return "voa e " . parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "<hr>";

$gato = new Gato();

echo $gato->falar() . "<br/>";
echo $gato->mover() . "<br/>";

echo "<hr>";

$passaro = new Passaro();

echo $passaro->falar() . "<br/>";
echo $passaro->mover() . "<br/>";