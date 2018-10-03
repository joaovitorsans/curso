<?php

	/**
	 * Função: NUMBER_FORMAT() -> Formata um número com os milhares agrupados
	 * Retorno: string number_format(float $number [, int $decimals]); ou string number_format(float $number, int $decimals, string $dec_point, string $thousands_sep);
	 */
	$numero = 10503.559;

	echo number_format($numero, 2)."<br/><br/>"; //formato americano

	echo number_format($numero, 2, ",", "."); //formato brasileiro

?>