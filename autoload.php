<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

function __autoload($nomeClasse){ //se usa quando as classes estão na mesma pasta

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}


$carro = new DelRey();

$carro->acelerar(80);