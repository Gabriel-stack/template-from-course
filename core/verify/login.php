<?php
	if(isset($_POST['login'])){
		session_start();
		$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
		$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);
		if(empty($telefone) or empty($senha)){
			$_SESSION['message_error'] = 'preencha todos os campos';
			header('location: ../../auth/login.php');
			exit();
		}

		require_once '../models/User.php';
		$User = new User();

		if(!$User->logar($telefone, $senha)){
			$_SESSION['message_error'] = 'dados inválidos';
			header('location: ../../auth/login.php');
			exit();
		}

		var_dump($_SESSION);
	}
?>