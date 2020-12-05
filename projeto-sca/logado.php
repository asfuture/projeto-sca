<?php 
session_start();
   if (!isset($_SESSION['usuario_autenticado']) or $_SESSION['usuario_autenticado'] != 'SIM') {
    header('location:logado.php');
   }
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->

</head>
<body>
	<a href="http://localhost/projeto-sca/login.php"><button class="btn_sair">Sair</button></a> 
	<section class="section-index">
		<h1 class="titulo-cadastro-produto">SISTEMA DE CADASTROS <em>ASF</em>UTURE </h1>
		<div class="div-index">
				<!--Botão cadastrar-->
				<a class="a-cadastra" href="http://localhost/projeto-sca/formulario.php"><button class="btn-cadastra" >Cadastrar</button></a> 
				<!--Botão Consulta-->
				 <a class="a-consulta" href="http://localhost/projeto-sca/lista.php"><button class="btn-consulta">Consulta</button></a>
		</div>
	</section>
</body>
</html>