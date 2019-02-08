<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
//imagem destino, imagem origem, ponto de origem das imagens destino e origem (4 parametros), nova largura, nova altura, antiga largura, antiga altura

imagejpeg($new_image);

imagedestroy($old_image);

imagedestroy($new_image);

?> 
