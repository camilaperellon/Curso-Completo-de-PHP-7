<?

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";  //endereço do arquivo

$content = file_get_contents($link); //conteudo do arquivo

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">


