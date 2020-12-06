<?php
	session_start();
	include ('conecta.php');

	$Matricula = $_POST['matricula_aluno'];
	$Senha = $_POST['login_senha_aluno'];
	$password = md5($Senha);
	//Verificação do login do aluno(a)
	if (($Matricula == '')||($Senha == '') ) {
		header('location:login.php');
	}else{
		//Buscar dados do banco de dados
	$buscar = "SELECT * FROM tb_alunos WHERE id ='$Matricula'";
	$resultado = mysqli_query($con,$buscar);
	while ($dados = mysqli_fetch_array($resultado) ) {
			$matricula=$dados['id'];
			$aluno=$dados['nome'];
			$senha_aluno=$dados['senha'];
	}
	//Verificar sennha
	if ($password === $senha_aluno) {
		echo "<script> alert('Login Realizado com sucesso')</script>";
		$_SESSION['usuario_autenticado'] = 'SIM';
		$_SESSION['id'] = $matricula;
		$_SESSION['nome'] = $aluno;
		$_SESSION['senha'] = $senha_aluno;
		header('location:aluno_logado.php?'.$aluno);
	}
	else{
		echo "<script> alert('Senha ou E-mail invalido')</script>";
		$_GET['erro'] = 'erro1';
		header('location:login.php?'.$_GET['erro']);
	}
}
?>