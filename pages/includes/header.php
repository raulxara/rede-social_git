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
	<div class="form-login right">
		<form method="post">
			<input type="text" name="email" placeholder="E-mail...">
			<input type="password" name="senha" placeholder="Senha...">
			<input type="submit" name="login" value="Entrar">
		</form>
	</div>
	<div class="clear"></div>
</header>