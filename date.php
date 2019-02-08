<?

echo date("d/m/Y H:i:s");

echo "<br>";

echo time();

echo "<br>";

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1 day");

echo date("l, d/m/Y", $ts);

echo "<br>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));

echo "<br>";

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/y H:i:s");