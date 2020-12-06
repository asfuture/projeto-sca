<?php
include('conecta.php');

	//Rebecendo dados do formulário cadastra
	$Nome = $_POST['cNome'];
	$SobreNome = $_POST['Sobrenome'];
	$Nascimento = $_POST['cNasc'];
	$Serie = $_POST['cSeri'];
	$Nivel = $_POST['cNivel'];
	$Escola = $_POST['cEscola'];
	$Sexo = $_POST['cSexo'];
	$senha = rand(100000,200000);//gerador de senha
	$senha_criptografada = md5($senha);
	//Enviando dados do formulário cadastra para o BD
		$incluir = "INSERT INTO tb_alunos (nome,sobrenome,nascimento,serie,nivel,escola,sexo,senha) VALUES ('$Nome','$SobreNome','$Nascimento','$Serie','$Nivel','$Escola','$Sexo','$senha_criptografada')";

		//Verificação do INSERT INTO no BD
		if ($con -> query($incluir) === TRUE) {
			echo "Aluno cadastrado com sucesso";
		}else{
			echo "Error".$incluir."<br>".$con->error;
		}
	 //Retornando a pagina formulário(pagina cadastrar)
		header('location:formulario.php');
		mysqli_close($con);
?>