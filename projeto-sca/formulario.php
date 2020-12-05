<?php 
session_start();
   if (!isset($_SESSION['usuario_autenticado']) or $_SESSION['usuario_autenticado'] != 'SIM') {
    header('location:formulario.php');
   }
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Aluno</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
</head>
<body>
	<a href="http://localhost/projeto-luby/login.php"><button class="btn_sair">Sair</button></a> 
	<section class="section">
		<h1>CADASTRO DE ALUNOS</h1>
			
		<div class="formulario-cadastro-produto">
			
			<p class="p-formulario">Preencha o formulário para cadastrar o aluno(a).</p>
			<br>
			<!--formulário para cadastra produto-->
			<form action="inseri.php" method="POST">
				
				<label for="txtNome">Nome:</label>&nbsp;&nbsp;<input type="text" name="cNome" id="txtNome" maxlength="30" size="25" required="">
				&nbsp;&nbsp;
				<label for="txtsobreNome">SobreNome</label>&nbsp;&nbsp;<input type="text" name="Sobrenome" id="txtsobreNome" maxlength="50" size="25" required="">
				<br><br><br>

				<label for="txtNasc">Nascimento</label>&nbsp;&nbsp;<input type="Date" name="cNasc" id="txtNasc" maxlength="50" required>
				<br><br><br>

				<label for="txtEscola">Escola</label>&nbsp;&nbsp;<input type="text" name="cEscola" id="txtEscola" size="73"required=""><br><br><br>
				<!-- Pesquisar de como alterna as opções limitando a serie-->
				<label>Selecione uma opção</label>&nbsp;
				<select name="cNivel" required>
					<option></option>
					<option value="Ensino Fundamental">Ensino Fundamental</option>
					<option value="Ensino Médio">Ensino Médio</option>
				</select>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<!-- Nivél de ensino-->
				<label for="serie">Serie</label> &nbsp;<input type="number" name="cSeri" id="serie"required max="8" min="0" ><br><br><br>

				<label>Sexo :</label>&nbsp;&nbsp;
				<label>Masculino</label>&nbsp; <input type="radio" name="cSexo"value="Masculino" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Femenino</label>&nbsp;&nbsp; <input type="radio" name="cSexo"value="Femenino" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Outros</label>&nbsp;&nbsp; <input type="radio" name="cSexo"value="Outros" required><br><br><br>

				<!--Botão Salvar-->
				<input class="btn-salva-cadastro" type="submit" value="Salva">
			
			</form><br>

				<!--Botão Voltar-->
			<a href="http://localhost/projeto-luby/logado.php"><button class="btn-volta-cadastro">Voltar</button></a> 
		</div>
	</section>
</body>
</html>