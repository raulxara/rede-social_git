<section class="perfil-info w25">
	<div class="box">
		<h2 class="title"> Sobre mim:</h2>
		<div class="container-img">
			<a href=""><img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img_membro']; ?>" /></a>
			<a href=""><h1><?php echo $_SESSION['nome_membro']; ?></h1></a>
		</div>
	<div class="clear"></div>
	</div>
</section>

<section class="feed w50">
	<div class="box">
		<h2 class="title">No que você está pensando?</h2>
		<form method="post">
				<textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
				<input type="submit" name="feed_post" value="Publicar">
			</form>
			

	<div class="clear"></div>
	</div>

	<div class="box">
		
			<?php
				$postsFeed = \MySql::conectar()->prepare("SELECT * FROM `tb_site.feed` ORDER BY id DESC");
				$postsFeed->execute();
				$postsFeed = $postsFeed->fetchAll();
				foreach ($postsFeed as $key => $value) {
				$membro = \models\membrosModel::getMembroById($value['membro_id']);
			?>
			<div class="post-single-user">
				<div class="img-user-post">
					<img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/' ?><?php echo $membro['imagem'] ?>" />
				</div><!--img-user-post-->
				<div class="post-user-single">
					<h1><?php echo $membro['nome']; ?></h1>
					<p><?php echo $value['post'] ?></p>
				</div><!--post-user-single-->
				<div class="clear"></div>
			</div>
			<?php } ?>

	<div class="clear"></div>
	</div>
</section>

<section class="lista-amigos w25">
	<div class="box">
		<?php
			$amigos = \models\membrosModel::listarAmigos();
		?>
		<h2 class="title"> Amigos (<?php echo count($amigos); ?>):</h2>
		<?php
			foreach ($amigos as $key => $value) {
			$membro = \models\membrosModel::getMembroById($value);
		?>
		<div class="container-img">
			<a href=""><img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/'.$membro['imagem']; ?>" /></a>
			<a href=""><h1><?php echo $membro['nome']; ?></h1></a>
		</div>
		<?php } ?>
	<div class="clear"></div>
	</div>
</section>