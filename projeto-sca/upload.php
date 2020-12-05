<?php
 include("conecta.php");
 
 	$id_aluno = $_POST["ra"];
 	//Receber a imagem
 if (isset($_FILES['image'])) {
 	$extensao = strtolower(substr($_FILES['image']['name'],-4));

 		if($extensao =='') {
 		//Sem arquivo/foto
 		}else{
 		/*Buscar imagem do banco de dados*/
 		$buscar_img = mysqli_query($con, " SELECT imagem FROM tb_alunos WHERE id='$id_aluno' ");
	 	while ($dado_ = mysqli_fetch_array($buscar_img))
	 	 {		
			$img_perfil= $dado_['imagem'];			
		}

		//excluir foto do diretorio
		unlink("foto/".$img_perfil);

		/*Criptografar o nome da imagem e identificar o extensão da imagem e enviar para o diretório*/
 		$novo = md5(time()).$extensao;
 		$diretorio = "foto/";
		move_uploaded_file($_FILES['image']['tmp_name'],$diretorio.$novo);
 		$inserir_foto = " UPDATE tb_alunos SET imagem ='$novo',data = now()where id= '$id_aluno'";
 		//Verificar se a imagem foi enviada com sucesso.
 		if ($con -> query($inserir_foto) === TRUE) {
			echo "Cadastro alterado com sucesso";
		}else{
			echo "Error".$inserir_foto."<br>".$con->error;
			}
		}
	}
   		 //Retornando a pagina aluno_logado
   		header('location:aluno_logado.php');
    	mysqli_close($con);
?>