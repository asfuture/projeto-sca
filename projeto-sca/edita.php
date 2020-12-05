<?php 
session_start();
   if (!isset($_SESSION['usuario_autenticado']) or $_SESSION['usuario_autenticado'] != 'SIM') {
    header('location:edita.php');
   }
	// Capiturar os dados do BD e enviar para o formulário editar
	include("conecta.php");

	$ra = $_GET['id'];
	$resultado_dados = " SELECT * FROM tb_alunos WHERE  id= $ra";
	$resultado_bd = mysqli_query($con, $resultado_dados);
	$row_dados = mysqli_fetch_assoc($resultado_bd);
 ?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alterar cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
</head>
<body>
	<a href="http://localhost/projeto-luby/login.php"><button class="btn_sair">Sair</button></a> 
	<section class="section">
		<h1>EDITAR  CADASTRO</h1>

		<div class="formulario-editar-produto">
			
			<!-- Formulário editar dados do BD.-->
			<form class="form-editar-produto" action="update.php" method="POST">
				<label for="txtNome">Matricula:</label>
				<input type="number" name="ra" class="ra" value="<?php echo $row_dados['id'];?>" readonly ><br><br>

				<label for="txtNome">Nome</label>&nbsp;&nbsp;<input type="text" name="Nome" id="txtNome" maxlength="50" size="25" required value="<?php echo $row_dados['nome']; ?>">
				&nbsp;&nbsp;
				<label for="txtNome">SobreNome </label>&nbsp;&nbsp;<input type="text" name="SobreNome" id="txtSobreNome" maxlength="50" size="25" required value="<?php echo $row_dados['sobrenome']; ?>">
				<br><br><br>

				<label for="txtNasc">Nascimento</label><input type="Date" name="Nasc" id="txtNasc" maxlength="50" value="<?php echo $row_dados['nascimento']; ?>" required ><br><br><br>

				<label for="txtEscola">Escola</label>&nbsp;&nbsp;<input type="text" name="Escola" id="txtEscola" size="73" required value="<?php echo $row_dados['escola']; ?>"><br><br>
				<!--Opção da escolhar do ensino e serie-->
				<label>Selecione uma opção</label>&nbsp;
				<select name="Nivel" id="txtNivel">
					<option value="<?php echo $row_dados['nivel'];?>"></option>
					<option value="Ensino Fundamental">Ensino Fundamental</option>
					<option value="Ensino Médio">Ensino Médio</option>
				</select>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="txtSerie">
				Serie</label> &nbsp;<input type="number" name="Seri" id="txtSerie" maxlength="50" required max="8" min="0" value="<?php echo $row_dados['serie']; ?>">
				<br><br><br>

				<label id="sexo" class="editar-sexo">Sexo :&nbsp;<?php echo $row_dados['sexo']; ?></label><br><br>
				&nbsp;&nbsp;&nbsp;
				<label>Masculino</label>&nbsp; <input type="radio" name="Sexo" id="masc" value="Masculino" onclick="masculino()" >
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Femenino</label>&nbsp;&nbsp;<input type="radio" name="Sexo" id="fem" value="Femenino" onclick="femenino()">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>Outros</label>&nbsp;&nbsp;<input type="radio" name="Sexo" id="Outro" value="Outros" onclick="outros()" ><br><br><br><br>
				<input class="btn-salva-editar" type="submit" value="Alterar"> 
			</form>
			<a href="http://localhost/projeto-luby/lista.php"><button class="btn-volta-editar">Voltar</button></a>
		</div>
	</section>
	<script>
		//Alterar a escolhar do sexo
		function masculino() {
			var sexo_m = document.querySelector("input#masc");
			var res = document.querySelector('label#sexo');
			var valor = " Masculino";
			res.innerHTML='Sexo :' + valor;
		}
		function femenino() {
			var sexo_f = document.querySelector("input#fem");
			var res = document.querySelector('label#sexo');
			var valor = " Femenino";
			res.innerHTML='Sexo :' + valor;
		}
		function outros() {
			var sexo_o = document.querySelector("input#Outro");
			var res = document.querySelector('label#sexo');
			var valor = " Outros";
			res.innerHTML='Sexo :' + valor;
		}	
	</script>
</body>
</html>