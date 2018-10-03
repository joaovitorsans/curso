<?php

	/**
	 * Função: ASORT() -> Ordena um array mantendo a associação entre índices e valores
	 * Retorno: bool asort(array &$array [, int $sort_flags]);
	 * OBS.: asort ordena em ordem crescente [A-Z] e o arsort ordena em ordem 
	 * decrescente [Z-A]
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	asort($array);

	print_r($array);

?>