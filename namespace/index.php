 <?

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Camila");
$cad->setEmail("Camila@gmail.com");
$cad->setSenha("camila");

$cad->registrarVenda();





