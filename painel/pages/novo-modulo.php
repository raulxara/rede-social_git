<div class="box-content w100">
	<h2 class="titulo-topo"><i class="fa-solid fa-book-open-reader"></i> Adicionar Módulo</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
				$nome = $_POST['nome'];

				if($nome == ''){
					Painel::alert('erro','Você precisa preencher todos os campos.');
				}else{
					$sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin.modulos` VALUES (null,?)");
					$sql->execute(array($nome));
					Painel::alert('sucesso','O módulo foi cadastrado com sucesso.');
				}
			

			}
		?>

		<div class="form-group">
			<label>Nome do Módulo:</label>
			<input type="text" name="nome">
		</div>
		<div class="form-group">
			<input type="submit" name="acao" value="Adicionar">
		</div>
		
	</form>
</div>

