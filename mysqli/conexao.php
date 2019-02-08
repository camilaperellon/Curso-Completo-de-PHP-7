<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

//conexão com o banco
$conn = new mysqli("192.168.14.224", "usr_teste", "1234", "dbcurso");

if($conn->connect_error){

	echo "Erro: " . $conn->connect_error;
	exit;
}



