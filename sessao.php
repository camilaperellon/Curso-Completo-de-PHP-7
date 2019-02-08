<?

require_once("config.php");

$_SESSION["nome"] = "Hcode";

session_unset($_SESSION['nome']);  //apaga uma sessão, mas o usuário ainda pode logar

echo $_SESSION["nome"];

session_destroy();  // apaga totalmente o usuário


