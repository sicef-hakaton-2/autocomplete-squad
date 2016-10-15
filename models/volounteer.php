<?php 
	
	class Volounteer {
	
		
		public $id;
		public $ime;
		public $prezime;
		public $email;
		public $telefon;
		public $grad;
		public $zauzet;
		
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
							 "ime" => $this->ime, 
							 "prezime" => $this->prezime, 
							 "email" => $this->email, 
							 "telefon" => $this->telefon, 
							 "grad" => $this->grad, 
							 "zauzet" => $this->zauzet
							];
			echo json_encode($group_object, JSON_FORCE_OBJECT);
			return;
		}
		
	}