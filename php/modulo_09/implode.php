<?php

	/**
	 * Função: IMPLODE() -> Une várias strings em uma string
	 * Retorno: string implode(string $cola, array $pecas);
	 */
	$pecas = array("João", "Vitor", "Santos");

	$cola = implode(" ", $pecas);

	echo $cola;

?>