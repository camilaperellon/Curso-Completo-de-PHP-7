<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

$name = "images";

if(!is_dir($name)){

	mkdir($name);

	echo "Diretorio $name criado com sucesso"; 

}else{

	rmdir($name);

	echo "Ja existe o diretorio $name, foi removido";
}