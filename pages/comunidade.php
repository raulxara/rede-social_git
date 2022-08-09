<section class="comunidade">
	<div class="container">
		<div class="box">
			<h2 class="title">Comunidade</h2>
			<?php  
				$select = \MySql::conectar()->prepare("SELECT * FROM `tb_site.membros`");
				$select->execute();
				$select = $select->fetchAll();
				foreach ($select as $key => $value) {
				if($value['id'] == $_SESSION['id_membro'])
					continue;
			?>


			<div class="membro-listagem">
				<div class="box-imagem left">
					<a href=""><img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem']; ?>" /></a>
					<a href=""><h1><?php echo $value['nome']; ?></h1></a>
				</div>

				<div class="right btn-a-adicionar">
					<?php
						if($arr['controller']->isAmigo($value['id'])){
							echo '<a style="background: #2B83E5;" href=""><i class="fa fa-check"></i> Amigo(a)</a>';
						}
						else if($arr['controller']->amigoPendente($value['id']) == false){
					?>
					<a href="<?php echo INCLUDE_PATH ?>comunidade?addFriend=<?php echo $value['id']; ?>">Adicionar</a>
					<?php }else{ ?>
					<a style="opacity: 0.4;background:gray;" href="javascript:void(0);">Solicitação pendente</a>
					<?php } ?>
				</div>
				<div class="clear"></div>
			</div>

			<?php } ?>
		</div>
	<div class="clear"></div>
	</div>
</section>