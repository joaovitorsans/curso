<?php

	/**
	 * Função: IN_ARRAY() -> Checa se um valor existe em um array
	 * Retorno: bool in_array(mixed $needle , array $haystack [, bool $strict]);
	 */
	$array = array(
		"Nome" => "João Vitor",
		"Idade" => 22,
		"Cidade" => "Teixeira de Freitas",
		"País" => "Brasil"
	);

	if(in_array("João Vitor", $array)) {
		echo "Ele é foda!!!";
	} else {
		echo "Ele é um merda!!!";
	}

?>