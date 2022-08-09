<section class="comunidade">
	<div class="container">
		<div class="box">
			<h2 class="title">Solicitações pendentes</h2>
			<?php
				$solicitacoesPendentes = \controller\solicitacoesController::listarSolicitacoes();
				foreach ($solicitacoesPendentes as $key => $value) {
				//Puxar informacoes do solicitante.
				$membro = \models\membrosModel::getMembroById($value['id_from']);
			?>

			<div class="membro-listagem">
				<div class="box-imagem left">
					<a href=""><img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/'.$membro['imagem'] ?>" />
					<a href=""><h1><?php echo $membro['nome']; ?></h1></a>
				</div>

				<div class="right btn-a-adicionar">
					<a style="background: #2B83E5;" href="<?php echo INCLUDE_PATH ?>solicitacoes?aceitar=<?php echo $value['id_from'] ?>">Aceitar</a>
					<a style="opacity: 0.4;background:gray;" href="<?php echo INCLUDE_PATH ?>solicitacoes?rejeitar=<?php echo $value['id_from'] ?>">Rejeitar</a>
				</div>
				<div class="clear"></div>
			</div>
			<?php 
		}
	?>
		</div>
	<div class="clear"></div>
	</div>
</section>