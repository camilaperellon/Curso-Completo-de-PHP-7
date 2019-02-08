<?

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);  //o máximo é 255, sendo 0,0,0 preto e 255,255,255 branco.
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

?>
