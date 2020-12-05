<?php
	include ('conecta.php');
	//Dados para recuperar senha do professor
	$email_professor = $_POST['rec_senha_email_professor'];
	$nova_senha_professor = $_POST['rec_nova_senha_professor'];
	$repeti_senha_professor = $_POST['rec_repeti_senha_professor'];

	if ($nova_senha_professor != $repeti_senha_professor) {
		header('location:login.php');
	}else{
		//buscar dados no banco de dados
		$buscar = mysqli_query($con, " SELECT * FROM tb_login WHERE 	email='$email_professor'");
	 	while ($dado_ = mysqli_fetch_array($buscar)){	
	  		$id_tb_login = $dado_['id'];
			$email = $dado_['email'];			
			} 
			if ($email === $email_professor ) {
			$senha_criptografada = md5($repeti_senha_professor);
			//Atualizando senha  tb_login
			$atualizar_senha = " UPDATE tb_login SET 
            senha ='$senha_criptografada' where id='$id_tb_login'";
			}else{
				echo "<script> alert('email errado');</script>";
			}
			 if ($con -> query($atualizar_senha) === TRUE) {
			echo "Senha alterado com sucesso<br><a href='http://localhost/projeto-sca/login.php'><button>Volta para o login</button></a>";
			}else{
			echo "Error".$atualizar_senha."<br>".$con->error;
			}
			mysqli_close($con);
		}
?>