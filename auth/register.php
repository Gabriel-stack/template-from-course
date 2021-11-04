<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/app.css">
    <title>Cadastro</title>
</head>
<body>
	<div class="containerauth">
		<form action="../core/verify/register.php" method="post">
			<?php
				if(isset($_SESSION['message_error'])){
					echo "<div class='error'>{$_SESSION['message_error']}</div>";
					unset($_SESSION['message_error']);
				}
			?>
			<input type="text" name="nome" placeholder="insira seu nome">
			<input type="text" name="telefone" placeholder="insira seu número">
			<input type="password" name="senha" placeholder="insira sua senha">
			<input type="password" name="confirmarsenha" placeholder="confirme sua senha">
			<input name="register" type="submit" value="cadastrar">
			<span style="margin-top: 5px;">já possui uma possui uma conta? <a href="login.php">entre!</a></span>
		</form>
	</div>
</body>
</html>