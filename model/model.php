	<?php
	include_once("model/user.php");

	class Model {
		public function getUserListXML(){
			// Leitura arquivo user.xml
			$arquivoXML = "user.xml"; // Arquivo xml
   			$xml = simplexml_load_file($arquivoXML); // Carrega o arquivo XML e retornando um Array
    
			$listaUser = array();
			foreach($xml->user as $user){
				$id = $user['id'];
				$nome = $user['nome'];
				$sobrenome = $user['sobrenome'];
				$usuario = $user['usuario'];
				$email = $user['email'];
				$status = $user['status'];

				if($status == 1){
					$listaUser[] = new User($id, $nome, $sobrenome, $usuario, $email);
				}
			}
			return $listaUser;
		}
	}
?>