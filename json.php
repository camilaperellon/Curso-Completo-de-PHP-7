<?

$pessoas = array();

array_push($pessoas, array( 
	'nome' => 'Joao',
	'idade' => 20
)
);

array_push($pessoas, array( 
	'nome' => 'Glaucio',
	'idade' => 25
)
);

// json_encode - transforma Array em Json.
echo json_encode($pessoas);

echo "<br>";

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

// json_decode - transforma Json em Array.
$data = json_decode($json, true);

var_dump($data);