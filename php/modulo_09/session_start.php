<?php

	/**
	 * Função: SESSION_START() -> Inicia uma nova sessão ou resume uma sessão existente
	 * Retorno: bool session_start([array $options = []]);
	 */
	session_start();

	$_SESSION["teste"] = "João Vitor Santos";

	echo "Sessão foi feita...";

?>