<?php
	include ('conecta.php');

	$email_professor = $_POST['rec_senha_email_professor'];
	$nova_senha_professor = $_POST['rec_nova_senha_professor'];
	$repeti_senha_professor = $_POST['rec_repeti_senha_professor'];

	if ($nova_senha_professor != $repeti_senha_professor) {
		header('location:login.php');
	}else{

		$buscar = mysqli_query($con, " SELECT * FROM tb_login ");
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
			echo "Senha alterado com sucesso";
			}else{
			echo "Error".$atualizar_senha."<br>".$con->error;
			}
		}
	
?>