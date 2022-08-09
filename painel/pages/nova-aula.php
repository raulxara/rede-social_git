<div class="box-content w100">
	<h2 class="titulo-topo"><i class="fa-solid fa-book-open-reader"></i> Adicionar Aula</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
				$nome = $_POST['nome'];
				$modulo_id = $_POST['modulo_id'];
				$link = $_POST['link_aula'];

				if($nome == '' || $link == ''){
					Painel::alert('erro','Preencha todos os campos.');
				}else{
					$sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin.aulas` VALUES (null,?,?,?)");
					$sql->execute(array($nome,$modulo_id,$link));
					Painel::alert('sucesso','Aula cadastrada com sucesso.');
				}

			}
		?>

		<div class="form-group">
			<label>Nome da Aula:</label>
			<input type="text" name="nome">
		</div>
		<div class="form-group">
			<label>Selecione o Módulo:</label>
			<select name="modulo_id">
				<?php  
					$modulos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.modulos`");
					$modulos->execute();
					$modulos = $modulos->fetchAll();
					foreach ($modulos as $key => $value) {
					
				?>

					<option value="<?php echo $value['id'] ?>"><?php echo $value['nome']; ?></option>

				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Link da Aula:</label>
			<input type="text" name="link_aula">
		</div>
		<div class="form-group">
			<input type="submit" name="acao" value="Adicionar">
		</div>
		
	</form>
</div>

