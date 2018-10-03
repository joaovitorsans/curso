<?php
	
	//Conectando ao banco de dados
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	//Tramento de erro: evita que  qualquer problema na aplicação apareça para o usuario
	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass); //Conectando ao banco de dados
	} catch(PDOException $e) {
		echo "Falhou: ".$e -> getMessage();
	}

	//Fazendo a cunsulta ao banco de dados
	$sql = "SELECT * FROM usuarios WHERE email = 'joao.vitorsans@gmail.com' ";
	$sql = $pdo -> query($sql);

	if($sql -> rowCount() > 0) {
		//fetchAll() - transforma os resultados do banco em arrays
		foreach($sql -> fetchAll() as $users) {
			echo "Código: ".$users["id"].
			"<br/>Nome: ".$users["nome"].
			"<br/>email: ".$users["email"].
			"<br/>senha: ".$users["senha"]."<br/><br/>";
		}
	} else {
		echo "Não há usuários cadastrados!";
	}
?>