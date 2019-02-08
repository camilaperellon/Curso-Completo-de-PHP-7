<?

$a = 10;

function trocaValor(&$a){  //o & significa passagem de parametro por referencia, isto é , o que acontece na função muda na variável.

	$a += 50;              // o que acontece na função fica na função, execeto quando coloca-se o &.

	return $a;
}

echo trocaValor($a);

echo "<br>";

echo $a . "<br>";

$pessoa = array(
	'nome' => 'Joao',
	'idade' => 20
);

foreach ($pessoa as &$value) {   //quando o & é colocado, o valor que se alterará com o foreach irá mudar no array original
                                // senão os dois valores serão diferentes, pois o que muda dentro do foreach não altera o array original.
	if(gettype($value) === 'integer') $value += 10;
	echo $value . '<br>';
}

print_r($pessoa);

echo "<br>";

function soma(int ...$valores):string {  //o programa faz um cast da soma que chegou como int em string.

	return array_sum($valores);
}

echo var_dump(soma(2,2)) . "<br>";
echo soma(25,33) . "<br>";
echo soma(1.5,3.2) . "<br>";

