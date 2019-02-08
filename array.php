<form>
	<input type="text" name="nome">
	<input type="date" name="dataNascimento">
	<input type="submit" value ="OK">
</form>

<?

if(isset($_GET)){

	foreach ($_GET as $campo => $valor) {
		
		echo "Nome do Campo: ". $campo . "<br>";
		echo "Valor do Campo: ". $valor . "<br>";
		echo "<hr>";
		
	}

}

$meses = array(
	"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"

);

foreach ($meses as $mes) {
	echo "O mes e: " .$mes. "<br>";
}

echo "<br>";


