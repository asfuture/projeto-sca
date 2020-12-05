<?php
	session_start();
	include ('conecta.php');

	$Email = $_POST['login_email_professor'];
	$Senha = $_POST['login_senha_professor'];
	$password = md5($Senha);
	
	//Verificação do login do professor
	if (($Email == '')||($Senha == '') ) {
		header('location:login.php');
	}else{
		//Buscar dados no banco de dados
	$buscar = "SELECT * FROM tb_login WHERE email ='$Email'";
	$resultado = mysqli_query($con,$buscar);
	while ($dados = mysqli_fetch_array($resultado) ) {
			$matricula=$dados['id'];
			$email_professor=$dados['email'];
			$senha_professor=$dados['senha'];	
	}
	//verificação da senha e loga
	if ($password === $senha_professor) {
		echo "<script> alert('Login Realizado com sucesso')</script>";
		$_SESSION['usuario_autenticado'] = 'SIM';
		$_SESSION['id'] = $matricula;
		$_SESSION['email'] = $email_professor;
		$_SESSION['senha'] = $senha_professor;
		header('location:logado.php?'.$email_professor);
	}else{
		echo "<script> alert('Senha ou E-mail invalido')</script>";
		$_GET['erro'] = 'erro1';
		header('location:login.php?'.$_GET['erro']);
	}
}
 ?>