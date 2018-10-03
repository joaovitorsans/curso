<?php

	/**
	 * Função: SETCOOKIE() -> Envia um cookie
	 * Retorno: bool setcookie(string $name [, string $value = "" [, int $expire = 0 [, string $path = "" [, string $domain = "" [, bool $secure = false [, bool $httponly = false ]]]]]]);
	 */
	setcookie("meuteste", "Joao", time()+3600);

	echo "Cookie setado com sucesso!<br/><br/>";

	if ($_COOKIE["meuteste"] == true) {
		echo "Meu cookie é de: ".$_COOKIE["meuteste"];
	} else {
		echo "Cookie falhou!";
	}
?>