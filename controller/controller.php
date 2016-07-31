<?php
	include_once("model/model.php");

	class Controller {
		public $model;
		
		public function __construct(){  
	        $this->model = new Model();
	    } 
		
		public function invoke(){
			//$users = $this->model->getUserListXML(); // Recupera registros do arquivo XML
			$users = $this->model->getUserList(); // Recupera registros do banco de dados
			include 'view/userList.php';
		}
	}
?>