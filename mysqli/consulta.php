<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

//conexão com o banco
$conn = new mysqli("192.168.14.224", "usr_teste", "1234", "dbcurso");

if($conn->connect_error){

	echo "Erro: " . $conn->connect_error;
	exit;
}

//consulta com o banco
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)){

	array_push($data, $row);
}

echo json_encode($data);