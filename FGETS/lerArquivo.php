<?

$filename = "usuarios.csv";

if (file_exists($filename)) {
	
	$file = fopen($filename, "r");

	$headers = explode("," , fgets($file)); //como estava separado por virgulas e uma string, o explode faz o inverso do implode, tira as virgulas e transforma em array.	

	$data = array();

	while ($row = fgets($file)) {
		
		$rowData = explode(",", $row);
		$linha = array();

		for($i=0; $i<count($headers); $i++){

			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha);
	}

	fclose($row);

	echo json_encode($data);

	
}

