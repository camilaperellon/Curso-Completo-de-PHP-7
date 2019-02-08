<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php

//XSS - Inserção de códigos HTML ou JavaScrpit no campos de entrada que o site recebe informações
//XSS temporário - Quando são inseridas essas tags e quando a página é reiniciada, some.
//XSS permanente - Quando esses comandos são inseridos em dados que vão para o banco, assim, outros usuários verão outros ataques.

if(isset($_POST['busca'])){

	//echo strip_tags($_POST['busca'], "<strong>"); //strip_tags - se alguma tag for inserida dentro desse campo 'busca', ele transforma em texto
	                                //as tags que podem ser inseridas no campo.

	echo htmlentities($_POST['busca']); // htmlentities- mostra a tag usada.
}

?>