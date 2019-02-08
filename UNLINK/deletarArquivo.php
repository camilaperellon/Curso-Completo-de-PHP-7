<?

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt"); //unlink é a função de deletar um arquivo. O que for colocado em seu parâmetro vai ser deletado, por isso deve-se colocar o nome do arquivo.

echo "Arquivo removido com sucesso";

