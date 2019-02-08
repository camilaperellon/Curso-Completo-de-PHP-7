<?

if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {  //scandir-Lista os arquivos e diretórios que estão no caminho especificado eRetorna um array de arquivos e diretórios e os dois primeiros itens são "." e ".."
	if(!in_array($item, array(".", ".."))){  // o in_array é usado para entrar nele e se quiser excluir alguns itens, nesse caso são os . e ..

		unlink("images/" . $item);
	}
}

echo "OK";