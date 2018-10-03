<?php

	$nomes = array(
		array("nome" => "João Vitor", "idade" => 22), 
		array("nome" => "Geilson", "idade" => 23),
		array("nome" => "Maxciel", "idade" => 24),
		array("nome" => "Leonardo", "idade" => 17)
	);

	/**Estrutura de repetição baseada na quantidade de itens de um array, utilizado para listagem
	*A variável após o AS recebe o valor do array
	**/
	foreach($nomes as $aluno) {
		echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]." anos<br/>";
	}

	echo "<br/><br/>";

	$clientes = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"Estado" => "Bahia"
	);

	/**
	*A primeira variável após o AS recebe a chave e a segunda recebe o valor do array
	**/
	foreach($clientes as $chave => $usuario) {
		echo $chave." - ".$usuario."<br/>";
	}
?>