<?

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

echo "<br>";

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'teste'
], true);  // com o true no final ele vira insensitive, isto é, pode-se chamar com letras minusculas ou maiusculas, mas não é muito comum.

print_r(BANCO_DE_DADOS);

