<?

$file = fopen("log.txt", "a+");  //w vem de write e o + é que o aquivo ainda n foi criado

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";