<?php

	/**
	 * Função: COUNT() -> Conta o número de elementos de uma variável, ou propriedades de um objeto
	 * Retorno: int count(mixed $var [, int $mode ]);
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	$count = count($array);

	echo "No meu ARRAY possui ".$count." registros";

?>