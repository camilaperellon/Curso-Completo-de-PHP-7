<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

$conn = new PDO("mysql:dbname=dbcurso;host=192.168.14.224", "usr_teste", "1234");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>" . $key . ":</strong>" . $value . "<br>";
	}

	echo "============================================================================== <br>";
}

var_dump($results);