	<?php
	include_once("model/user.php");

	class Database{
		private static $dbName = 'simers' ;
		private static $dbHost = 'localhost' ;
		private static $dbUsername = 'root';
		private static $dbUserPassword = '';

		private static $cont  = null;

		public function __construct(){
			die('Função Init não permitida');
		}

		public static function connect(){
			// Uma conexão para toda a aplicação
			if ( null == self::$cont ){     
				try{
					self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
					self::$cont->exec("set names utf8"); 
				}
				catch(PDOException $e){
					die($e->getMessage()); 
				}
			}
			return self::$cont;
		}

		public static function disconnect(){
			self::$cont = null;
		}
	}

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

		public function getUserList(){
			$pdo = Database::connect();
			$sql = "SELECT * FROM user WHERE status=1 ORDER BY id";
			foreach ($pdo->query($sql) as $row) {
				$id = $row['id'];
				$nome = $row['nome'];
				$sobrenome = $row['sobrenome'];
				$usuario = $row['usuario'];
				$email = $row['email'];

				$listaUser[] = new User($id, $nome, $sobrenome, $usuario, $email);
			}
			Database::disconnect();
			return $listaUser;		
		}
	}
?>