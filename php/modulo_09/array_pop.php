<?php

	/**
	 * Função: ARRAY_POP() -> Extrai um elemento do final do array
	 * Retorno: mixed array_pop(array &$array);
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	array_pop($array);

	print_r($array);

?>