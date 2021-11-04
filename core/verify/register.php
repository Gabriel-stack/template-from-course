<?php
	if(isset($_POST['register'])){
		session_start();
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
		$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);
		$confirmarsenha = filter_input(INPUT_POST,'confirmarsenha', FILTER_SANITIZE_SPECIAL_CHARS);
		if(empty($nome) or empty($telefone) or empty($senha) or empty($confirmarsenha)){
			$_SESSION['message_error'] = 'preencha todos os campos';
			header('location: ../../auth/register.php');
			exit();
		}
		if($senha !== $confirmarsenha){
			$_SESSION['message_error'] = 'senha deve ser igual nos dois campos';
			header('location: ../../auth/register.php');
			exit();
		}

		require_once '../models/User.php';
		$User = new User();
		$User->cadastrarUsuario($nome, $telefone, $senha);
	}
?>