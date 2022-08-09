<!DOCTYPE html>
<html>
<head>
	<title>YouPlug</title> 
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fonts-6/css/all.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css3/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="rede social, encontrar amigos">
	<meta name="description" content="rede social para se conectar e conhecer pessoas">
	<meta name="author" content="Raul Nascimento Cruz">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	 
	

</head>
<body>
	<base base="<?php echo INCLUDE_PATH; ?>" />


<header>
	<div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">YouPlug</a></div>
	<div class="btn-opt-menu right">
		<?php $solicitacoesPendentes = count(\controller\solicitacoesController::listarSolicitacoes()); ?>
		<a href="<?php echo INCLUDE_PATH ?>solicitacoes"><i class="fa-solid fa-users"></i>(<?php echo $solicitacoesPendentes ?>)</a>
		<a href="<?php echo INCLUDE_PATH ?>comunidade"><i class="fa-solid fa-globe"></i></a>
		<a href="<?php echo INCLUDE_PATH ?>me?sair"><i class="fa-solid fa-right-from-bracket"></i></a>
	</div>
	<div class="clear"></div>
</header>