<?php

	/**
	 * Função: MKTIME()
	 * Retorno: int mktime ([ int $hora [, int $minuto [, int $second 
	 * [, int $mes [, int $dia [, int $ano [, int $is_dst ]]]]]]] );
	 */
	$tempo = date('d/m/Y \a\s H:i:s', mktime(22, 59, 0, 4, 16, 2000));

	echo $tempo;

?>