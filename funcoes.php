<?

function oi(){  

	return "Ola Mundo!";
}

echo oi() . "<br>";
$frase = oi();

echo strlen($frase)."<br>";

echo "<br>";

function salario(){
	return 946.00;
}

echo "Jose recebeu 3 salarios de " . (salario()*3) . "<br>";

echo "<br>";


function ola($texto="Mundo" , $periodo="Bom dia"){  // parametros que não tem valor padrão sempre a esquerda

	return "Ola $texto, $periodo! <br>";
}

echo ola("Camila", "Bom dia");
echo ola("Mundo", "Boa Tarde");
echo ola();
echo ola("Joao", "");

echo "<br>";

function seuNome(){

	$argumentos += func_get_args();

	return $argumentos;

}

var_dump(seuNome("Camila", "Amanda"));

echo "<br>";

