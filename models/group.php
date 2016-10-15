<?php 
	
	require_once('volounteer.php');
	require_once('group_head.php');
	
	
	class Group {
		
		public $id;
		public $broj_ljud;
		public $id_volontera;
		public $id_vodje;
		public $aktivna;
		public $transport;
		
		public $vodja;
		public $volonter;
		
		public $errors = array();
		
		public function __construct()
		{
			$this->vodja = new GroupHead();
			$this->volonter = new Volounteer();
		}
		
		public function return_json()
		{
			if(!empty($this->errors)) {
				$error_code = ["message" => 'error', "errors" =>$this->errors];
				echo json_encode($error_code, JSON_FORCE_OBJECT);
				return;
			}
			
			$group_object = ["id" => $this->id, "broj_ljudi" => $this->broj_ljud, "aktivna" => $this->aktivna, "transport" => $this->transport, "vodja" => $this->vodja, "volonter"=> $this->volonter];
			echo json_encode($group_object, JSON_FORCE_OBJECT);
			return;
		}
	}