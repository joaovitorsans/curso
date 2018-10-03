<?php

	/**
	 * Função: EXPLODE() -> Divide uma string em strings
	 * Retorno: array explode(string $delimiter, string $string [, int $limit]);
	 */
	$texto = "João Vitor Santos";

	$array = explode(" ", $texto);

	print_r($array);
	echo "<br/>";
	$texto = "Bonieky Lacerda Leal";

	$array = explode(" ", $texto, 2);

	print_r($array);	

?>