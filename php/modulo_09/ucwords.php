<?php

	/**
	 * Função: UCWORDS() -> Converte para maiúsculas o primeiro caractere de cada palavra
	 * Retorno: string ucwords(string $str);
	 */
	$texto = "joao vitor";
	echo $texto."<br/><br/>";

	$troca = ucwords($texto);
	echo $troca;

?>