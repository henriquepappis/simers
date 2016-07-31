<?php
	include_once("model/model.php");

	class Controller {
		public $model;
		
		public function __construct(){  
	        $this->model = new Model();
	    } 
		
		public function invoke(){
			$users = $this->model->getUserListXML(); // Recupera registros do arquivo XML
			include 'view/userList.php';
		}
	}
?>