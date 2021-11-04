<?php
session_start();
if(isset($_SESSION['id'])){
	header('location: ../dashboard');
	exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/app.css">
    <title>Login</title>
</head>
<body>
	<div class="containerauth">
		<form action="../core/verify/login.php" method="post">
			<?php
				if(isset($_SESSION['message_error'])){
					echo "<div class='error'>{$_SESSION['message_error']}</div>";
					unset($_SESSION['message_error']);
				}
			?>
			<input type="text" name="telefone" placeholder="insira seu número">
			<input type="password" name="senha" placeholder="insira sua senha">
			<input name="login" type="submit" value="entrar">
			<span style="margin-top: 5px;">não possui uma conta? <a href="register.php">cadastre-se!</a></span>
		</form>
	</div>
</body>
</html>