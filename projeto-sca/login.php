<?php
    session_start();
    session_destroy();
    unset($_SESSION['usuario_autenticado']);
    $_SESSION['usuario_autenticado'] = null;
    session_commit();
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	 <meta name="viewport"content="width=device-width, initial-scale=1.0">
	 <title>Sistema de cadastro</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	 <link rel="stylesheet" type="text/css" href="estilo.css">
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="section-index">
		<h1 class="titulo-cadastro-produto">Faça o seu login</h1>
		<div>
				<!--Botão do login do professor-->
				<a class="a-cadastra" href="#"><button id="login_professor" data-toggle="modal" data-target="#modal_professor" class="btn-cadastra">Professor</button></a> 
				<!--Botão do login do aluno(a)-->
				 <a class="a-consulta" href="#"><button data-toggle="modal" data-target="#modal_aluno" class="btn-consulta">Aluno</button></a> 
		</div>

<!--  Modal login Professor-->
<div class="modal fade" id="modal_professor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login do Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="modal-body" method="POST" action="login_professor.php" >
        <label>Email:</label><input type="text" name="login_email_professor" required>
        <label>Senha</label><input type="password" name="login_senha_professor" required>
        <a href="#" id="" data-toggle="modal" data-target="#recupera_senha_professor"><label>Esqueci a senha</label></a><br><br>
        <input type="submit" name="" value="Enter">
      </form>
    </div>
  </div>
</div>

<!-- Modal login alunos-->
<div class="modal fade" id="modal_aluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login do Aluno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="modal-body" method="POST" action="login_aluno.php" >
        <label>Matricula:</label><input type="text" name="matricula_aluno" size="5">
        <label>Senha</label><input type="password" name="login_senha_aluno">
        <a href="#" id="" data-toggle="modal" data-target="#recupera_senha_aluno"><label>Esqueci a senha</label></a><br><br>
        <input type="submit" name="" value="Enter">
      </form>
    </div>
  </div>
</div>

<!-- Recuperar senha do professor-->
<div class="modal fade" id="recupera_senha_professor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recupera senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="modal-body" method="POST" action="recupera_senha.php" >
        <label>E-mail:</label> <input type="text" name="rec_senha_email_professor" required size="40"><br>
        <p>Crie uma nova senha com 6 digitos.</p>
        <label>Digite a nova senha</label> <input type="password" name="rec_nova_senha_professor"maxlength="6" size="10" required ><br><br>
        <label>Repita a nova senha</label> <input type="password" name="rec_repeti_senha_professor"maxlength="6" size="10" required ><br><br>
        <input type="submit" name="" value=" Salva ">
      </form>

    </div>
  </div>
</div>
<!-- Recuperar senha do Aluno-->
<div class="modal fade" id="recupera_senha_aluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recupera senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="modal-body" method="POST" action="recupera_senha_aluno.php" >
        <label>Digite a sua matricula:</label> <input type="text" name="num_matricula" size="10" maxlength="10" required><br>
        <p>Crie uma nova senha com 6 digitos.</p>
        <label>Digite a nova senha</label> <input type="password" name="rec_senha_aluno"maxlength="6" size="10" required><br><br>
        <label>Repita a nova senha</label> <input type="password" name="rec_nova_senha_aluno"maxlength="6" size="10" required><br><br>
        <input type="submit" name="" value=" Salva ">
      </form>
    </div>
  </div>
</div>
	</section>
</body>
</html>