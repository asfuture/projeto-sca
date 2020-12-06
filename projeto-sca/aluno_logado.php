<?php 
session_start();
   if (!isset($_SESSION['usuario_autenticado']) or $_SESSION['usuario_autenticado'] != 'SIM') {
    header('location:edita.php');
   }

	// Capiturar os dados do BD e enviar para o formulário editar
	include("conecta.php");

	$ra = $_SESSION['id'];
	$resultado_dados = " SELECT * FROM tb_alunos WHERE  id= $ra";
	$resultado_bd = mysqli_query($con, $resultado_dados);
	$row_dados = mysqli_fetch_assoc($resultado_bd);
 ?>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro do Aluno</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
</head>
<body>
	<a href="http://localhost/projeto-sca/login.php"><button class="btn_sair">Sair</button></a> 
	<section class="section">
		<h1>Cadastro do Aluno</h1>
		<div class="formulario-editar-produto">
			<!-- Formulário editar dados do BD.-->
			<form class="form-editar-produto" action="upload.php" method="POST" enctype="multipart/form-data">
				<div class="dados_aluno">
				<img class="foto" src="foto/<?php echo $row_dados['imagem'];?>">
				<div>
				<label for="txtNome">Matricula:</label>
				<input type="number" name="ra" class="ra" value="<?php echo $row_dados['id'];?>" readonly ><br><br>

				<label for="txtNome">Nome</label>&nbsp;&nbsp;<input type="text" name="Nome" id="txtNome" maxlength="50" size="25"value="<?php echo $row_dados['nome']; ?>" readonly>
				&nbsp;&nbsp;<br><br>
				<label for="txtNome">SobreNome </label>&nbsp;&nbsp;<input type="text" name="SobreNome" id="txtSobreNome" maxlength="50" size="20"value="<?php echo $row_dados['sobrenome']; ?>" readonly>
				<br><br>
			
				<label for="txtNasc">Nascimento</label>&nbsp;&nbsp;<input type="Date" name="Nasc" id="txtNasc" maxlength="50" value="<?php echo $row_dados['nascimento']; ?>"readonly><br><br><br>
					</div>
				</div>
				<!--Inserir foto no perfil do aluno-->
				<input type="file" name="image"><br><br>

				<label for="txtEscola">Escola</label>&nbsp;&nbsp;<input type="text" name="Escola" id="txtEscola" size="73"value="<?php echo $row_dados['escola']; ?>" readonly><br><br>

				<label>Nivel do Ensino</label>&nbsp;<input type="text" name="Nivel" readonly value="<?php echo $row_dados['nivel'];?>">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<label for="txtSerie">
				Serie</label> &nbsp;<input type="number" name="Seri" id="txtSerie"  readonly size="5" value="<?php echo $row_dados['serie']; ?>">
				<br><br><br>

				<label id="sexo" class="editar-sexo">Sexo :&nbsp;<?php echo $row_dados['sexo']; ?></label><br><br>
				<input class="btn-salva-cadastro" type="submit" value="Salva">
			</form>
			<a href="http://localhost/projeto-sca/login.php"><button class="btn-volta-editar">Voltar</button></a>
		</div>
	</section>
</body>
</html>