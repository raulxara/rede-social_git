<div class="box-content w100">
	<h2 class="titulo-topo"><i class="fa-solid fa-book-open-reader"></i> Adicionar Aluno</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];

				if($nome == '' || $email == '' || $senha == ''){
					Painel::alert('erro','Você precisa preencher todos os campos.');
				}else{
					$sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin.alunos` VALUES (null,?,?,?)");
					$sql->execute(array($nome,$email,$senha));
					Painel::alert('sucesso','O aluno foi cadastrado com sucesso.');
				}
			

			}
		?>

		<div class="form-group">
			<label>Nome do Aluno:</label>
			<input type="text" name="nome">
		</div>
		<div class="form-group">
			<label>Senha:</label>
			<input type="password" name="senha">
		</div>
		<div class="form-group">
			<label>E-mail:</label>
			<input type="text" name="email">
		</div>
		<div class="form-group">
			<input type="submit" name="acao" value="Adicionar">
		</div>
		
	</form>
</div>

