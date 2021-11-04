<?php
require_once 'Connection.php';
class User extends Connection
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function cadastrarUsuario($nome, $telefone, $senha){
		$query = $this->pdo->prepare('INSERT INTO usuarios(nome, telefone, senha) values (:n, :t, :s)');
		$query->bindValue(":n", $nome);
		$query->bindValue(":t", $telefone);
		$query->bindValue(":s", md5($senha));
		$query->execute();
	}
	public function logar($telefone, $senha){
		$user = $this->pdo->prepare('SELECT * from usuarios WHERE telefone = :t and senha = :s');
		$user->bindValue(":t", $telefone);
		$user->bindValue(":s", md5($senha));
		$user->execute();
		if($user->rowCount() > 0){
			$_SESSION[] = $user->fetch();
			return true;
		}
		return false;
	}
}