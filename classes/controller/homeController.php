<?php
	namespace controller;
	use \views\mainView;

	class homeController
	{
		public function index(){
			if(isset($_SESSION['email_membro'])){
				\Painel::redirect(INCLUDE_PATH.'me');
			}

			if(isset($_POST['login'])){
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$verifica = \MySql::conectar()->prepare("SELECT * FROM `tb_site.membros` WHERE email = ? AND senha = ?");
				$verifica->execute(array($email,$senha));
				if($verifica->rowCount() == 1){
					$info = $verifica->fetch();
					$_SESSION['email_membro'] = $email;
					$_SESSION['id_membro'] = $info['id'];
					$_SESSION['nome_membro'] = $info['nome'];
					$_SESSION['img_membro'] = $info['imagem'];
					\Painel::redirect(INCLUDE_PATH.'me');
				}else{
					\Painel::alertJS("E-mail ou senha incorretos!");
				}
			}
			if(isset($_POST['cadastro'])){
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$imagem = $_FILES['imagem'];
				if($nome === ''){
					\Painel::alertJS("O campo nome não pode estar vázio!");
				}else if($senha === ''){
					\Painel::alertJS("O campo senha não pode estar vázio!");
				}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
					\Painel::alertJS("O e-mail digitado é inválido!");
				}else if(\Painel::senhaForte2($senha) == false){
					\Painel::alertJS("Sua senha precisa conter ao menos 1 letra maiúscula, 1 letra normal e 1");
				}else if(\Painel::imagemValida($imagem) == false){
					\Painel::alertJS("A imagem é inválida!");
				}else{
					//Realizar o cadastro!
					$verifica = \MySql::conectar()->prepare("SELECT email FROM `tb_site.membros` WHERE email = ?");
					$verifica->execute(array($email));
					if($verifica->rowCount() == 0){
					$idImagem = \Painel::uploadFile($imagem);
					$sql = \MySql::conectar()->prepare("INSERT INTO `tb_site.membros` VALUES (null,?,?,?,?)");
					$sql->execute(array($nome,$email,$senha,$idImagem));
					\Painel::alertJS("O cadastro foi realizado com sucesso!");
					}else{
						\Painel::alertJS("Já existe um usuário com este e-mail!");
					}
				}
			}
			mainView::render('home.php');	
		}
	}
?>