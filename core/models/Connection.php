<?php

class Connection{
	protected $pdo;
	 function __construct(){
		try{
			$this->pdo = new PDO("mysql:host=localhost;dbname=lavajato",'root','');
		}
		catch(e){
			echo 'erro';
		}
	}
}
