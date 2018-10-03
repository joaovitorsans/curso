<?php
	
	/**
	 * Regras para nomes de funções:
	 *  - Não pode começar com número;
	 *  - Não pode conter espaços;
	 *  - Não pode conter caracteres especiais.
	 */
	
	//Criando função de somar
	function somarNumero($x, $y) {
		// Formas de retornar o resultado de uma função
		// Opção 1:
		$contar = $x + $y;
		return $contar;

		// Opção 2:
		//return $x + $y;
	}

	$resultado = somarNumero(40, 20);

	echo $resultado;

?>