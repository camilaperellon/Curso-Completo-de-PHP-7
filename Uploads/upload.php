<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>

<?

if($_SERVER["REQUEST_METHOD"] === "POST"){

	$file = $_FILES["fileUpload"];

	if($file["error"]){  // se der algum erro no arquivo

		throw new Exception("Erro: " . $file["error"]);	
	}

	$dirUploads = "Uploads";

	if(!is_dir($dirUploads)){ //se o diretorio q esse arquivo vai existe

		mkdir($dirUploads);
	}

	if(move_uploaded_file($file["tmp_name"], $dirUploads .  DIRECTORY_SEPARATOR . $file["name"])){  //se o upload foi feito com sucesso

		echo "Upload realizado com sucesso";
	
	}else{

		throw new Exception("Não foi possivel realizar o upload");
		
	}
}

