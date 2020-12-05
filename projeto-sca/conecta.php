<?php
//Conexão do banco de dados com o cadastro-alunos.
	$Server = "localhost";
	$User = "root";
	$Password = "";
	$BD_cadastro = "bd_alunos";

	$con =  mysqli_connect($Server,$User,$Password,$BD_cadastro);

	if ($con -> connect_error) {
		die("Conexão interrompida: ".$con -> connect_error);
	}
?>