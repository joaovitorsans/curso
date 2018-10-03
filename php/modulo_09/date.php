<?php

	/**
	 * Função: DATE()
	 * Retorno: string date(string $format [, int $timestamp]);
	 * TIMESTAMP -> Hora em segundos, iniciado a partir da era UNIX. 
	 * Caso o mesmo não seja informado, será usada a hora do servidor (local).
	 */
	$dataatual = date('d/m/Y \à\s H:i:s');

	echo $dataatual;

?>