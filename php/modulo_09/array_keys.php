<?php

	/**
	 * Função: ARRAY_KEYS() -> Retorna todas as chaves de um array
	 * Retorno: array array_keys(array $array [, mixed $search_value = null [, bool $strict = false]]);
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	$keys = array_keys($array);

	print_r($keys);

?>