<?php
	class User {
		public $id;
		public $nome;
		public $sobrenome;
		public $usuario;
		public $email;
		
		public function __construct($id, $nome, $sobrenome, $usuario, $email){  
	        $this->id = $id;
		    $this->nome = $nome;
		    $this->sobrenome = $sobrenome;
		    $this->usuario = $usuario;
		    $this->email = $email;
	    } 
	}
?>