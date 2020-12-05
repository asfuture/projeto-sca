<?php
include('conecta.php');
	//Recebendo dados enviado do formulário editar
	$id = $_POST['ra'];
	$Nome = $_POST['Nome'];
	$SobreNome = $_POST['SobreNome'];
	$nasci = $_POST['Nasc'];
	$seri = $_POST['Seri'];
	$nivel = $_POST['Nivel'];
	$escola = $_POST['Escola'];
	$sexo = $_POST['Sexo'];
    //Se não houver alteração do campo sexo buscar do banco de dados
	if ($sexo == '') {
		$buscar = mysqli_query($con, " SELECT * FROM tb_alunos ");
	 	while ($dado_ = mysqli_fetch_array($buscar))
	  		{		
			$sexo = $dado_['sexo'];			
			} 
		}
		//Atualizando o banco de dados
 		$atualizar_dados = " UPDATE tb_alunos SET 
            nome = '$Nome', sobrenome='$SobreNome', nascimento ='$nasci', serie = '$seri', nivel='$nivel', escola='$escola',sexo ='$sexo' where id= '$id'";
   		//Verificação de alteração do INSERT INTO do BD
   		 if ($con -> query($atualizar_dados) === TRUE) {
			echo "Cadastro alterado com sucesso";
		}else{
			echo "Error".$atualizar_dados."<br>".$con->error;
		}
   		 //Retornando a pagina Lista
   		header('location:lista.php');
    	mysqli_close($con);
?>
</body>
</html>