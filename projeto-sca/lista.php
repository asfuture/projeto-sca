<?php 
session_start();
   if (!isset($_SESSION['usuario_autenticado']) or $_SESSION['usuario_autenticado'] != 'SIM') {
    header('location:lista.php');
   }

	include('conecta.php');
	//Buscar os dados do BD e listar 
	$lista = mysqli_query($con," SELECT * FROM tb_alunos");
?>
	<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CONSULTA</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<a href="http://localhost/projeto-luby/login.php"><button class="btn_sair">Sair</button></a> 
		<section class="section">
		<h1 class="titulo-lista-produto">LISTA DE ALUNOS CADASTRADOS</h1></br>
		<!--Inicio da Tabela do listar--> 
		<table>
			<tr>
				<td class="titulo-tabela">Matricula</td>
				<td class="titulo-tabela">Nome</td>
				<td class="titulo-tabela">SobreNome</td>
				<td class="titulo-tabela">Nascimento</td>
				<td class="titulo-tabela">Serie</td>
				<td class="titulo-tabela">Nivél</td>
				<td class="titulo-tabela">Escola</td>
				<td class="titulo-tabela">Sexo</td>
				<td class="btn-volta-lista"><a href=http://localhost/projeto-luby/logado.php>Voltar</a></td>
			</tr>
			<!--While para buscar todos dados do BD e exibir da tela--> 
			<?php while ($dado = mysqli_fetch_array($lista)) {?>
				<tr>
					<!--Cabeçalho da tabela-->
					<td><?=$dado['id'];?></td>
					<td><?=$dado['nome'];?></td>
					<td><?=$dado['sobrenome'];?></td>
					<td><?=$dado['nascimento'];?></td>
					<td><?=$dado['serie'];?></td>
					<td><?=$dado['nivel'];?></td>
					<td><?=$dado['escola'];?></td>
					<td><?=$dado['sexo'];?></td>
					<!--Botões editar e excluir-->
					<td align="center"><a class="btn-tabela"  href="edita.php?id=<?php echo $dado['id'];?> ">Editar</a></td>
					<td align="center"><a class="btn-tabela-excluir"  href="#" onclick="verificar(<?=$dado['id'];?>)">Excluir</a></td>
					</tr>
				<?php } ?>	
		</table>
	<!--Fim da Tabela do listar--> 
	</section>
	</body>
	</html>
	