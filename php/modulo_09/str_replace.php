<?php

	/**
	 * Função: STR_REPLACE() -> Substitui uma string por outra
	 * Retorno: mixed str_replace(mixed $search, mixed $replace, mixed $subject);
	 */
	$texto = "Amanda é minha namorada";

	echo $texto."<br/><br/>";

	$troca = str_replace("namorada", "esposa", $texto);

	echo $troca;

?>