<?php

	/**
	 * Função: SUBSTR() -> Retorna uma parte de uma string
	 * Retorno: string substr(string $string, int $start [, int $length]);
	 */
	$texto = "Joao Vitor";
	echo $texto."<br/><br/>";

	$troca = substr($texto, 5);
	echo $troca."<br/><br/>";

	$troca = substr($texto, 5, 3);
	echo $troca;

?>