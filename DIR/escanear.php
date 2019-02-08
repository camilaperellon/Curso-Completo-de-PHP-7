<?


ini_set("display_errors", 1);
error_reporting(E_ALL);

$images = scandir("images");

$data = array();

foreach ($images as $img) {
	
	if(!in_array($img, array(".", ".." ))){

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modifield"] = date("d/m/Y H:i:s", filemtime($filename) ); 
		$info["url"] = "http://127.0.0.1/curso/DIR/" . $filename;

		array_push($data, $info);
	}
}

echo json_encode($data);