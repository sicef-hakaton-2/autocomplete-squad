<?php 
	
	class Resources {
	
		
		public $id;
		public $tip;
		public $id_grupe;
		public $id_volontera;
		
		public $errors = array();
		
		
		public function __construct()
		{
			
		}	
		
		public function return_json()
		{
			if(!empty($this->errors)) {
				$error_code = ["message" => 'error', "errors" =>$this->errors];
				echo json_encode($error_code, JSON_FORCE_OBJECT);
				return;
			}
			
			$group_object = ["id" => $this->id,
							 "tip" => $this->ime, 
							 "id_grupe" => $this->prezime, 
							 "id_volontera" => $this->email, 
							];
			echo json_encode($group_object, JSON_FORCE_OBJECT);
			return;
		}
		
	}