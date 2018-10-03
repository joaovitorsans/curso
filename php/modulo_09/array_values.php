<?php

	/**
	 * Função: ARRAY_VALUES() -> Retorna todos os valores de um array
	 * Retorno: array array_values(array $input);
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	$keys = array_values($array);

	print_r($keys);

?>