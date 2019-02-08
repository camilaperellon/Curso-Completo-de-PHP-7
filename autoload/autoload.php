<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}


$carro = new DelRey();

$carro->acelerar(80);