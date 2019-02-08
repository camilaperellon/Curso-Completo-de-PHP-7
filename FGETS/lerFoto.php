<?php

$filename = "html5.png";

$base64 = base64_encode(file_get_contents($filename));  //le o conteudo de um arquivo (fopen, fread e fclose)

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimeType = $fileinfo->file($filename);

$base64encode = "data:". $mimeType .";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank"> Link Para Imagem </a>

<img src="<?=$base64encode?>">