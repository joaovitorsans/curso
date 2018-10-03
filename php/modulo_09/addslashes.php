<?php

	/**
	 * Função: ADDSLASHES() -> Adiciona barras invertidas a uma string
	 * Retorno: string addslashes(string $str);
	 */
	$texto = addslashes($_POST["autor"]);

	$sql = "SELECT * FROM posts WHERE autor = '$texto'";//Comando de exemplo

?>