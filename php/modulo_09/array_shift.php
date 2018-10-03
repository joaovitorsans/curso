<?php

	/**
	 * Função: ARRAY_SHIFT() -> Extrai o primeiro elemento de um array
	 * Retorno: mixed array_shift(array &$array);
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	array_shift($array);

	print_r($array);

?>