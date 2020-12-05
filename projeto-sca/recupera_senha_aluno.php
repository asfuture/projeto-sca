<?php
	include ('conecta.php');
	//Dados para recuperar senha do aluno
	$matricula_aluno = $_POST['num_matricula'];
	$nova_senha_aluno = $_POST['rec_senha_aluno'];
	$repeti_senha_aluno = $_POST['rec_nova_senha_aluno'];
	
	if ($nova_senha_aluno != $repeti_senha_aluno) {
		header('location:login.php');
	}else{
		//buscar dados no banco de dados
		$buscar = mysqli_query($con, " SELECT * FROM tb_alunos WHERE id='$matricula_aluno'");
	 	while ($dado_ = mysqli_fetch_array($buscar)){	
	  		$id_tb_aluno = $dado_['id'];
	  		$senha_tb_aluno = $dado_['senha'];			
			}
			if ($matricula_aluno === $id_tb_aluno) {
			//Atualizando senha  tb_alunos
			$atualizar_senha = " UPDATE tb_alunos SET 
            senha ='$repeti_senha_aluno' WHERE id='$matricula_aluno'";
			}else{
				echo "<script> alert('email errado');</script>";
			}
			 if ($con -> query($atualizar_senha) === TRUE) {
			echo "Senha alterado com sucesso";
			}else{
			echo "Error".$atualizar_senha."<br>".$con->error;
			}
		}
?>