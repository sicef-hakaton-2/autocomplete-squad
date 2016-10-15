<?php 
	class Auth {
		
		private $db_con = null;
		
		public $errors = array();
		
		public $messages = array();
		
		public function __construct()
		{
			if(isset($_POST['register']))
				$this->register();
			
			else {
			session_start();
			
			if(isset($_GET["logout"]))
				$this->logout();
			
			elseif(isset($_POST["login"]))
				$this->login();
			}
			
		}
		
		private function login()
		{ 
			$email = $_POST['email'];
			$pass = $_POST['password'];
			
			if(empty($email)) {
				$this->errors[] = "Email field was empty.";
			} elseif(empty($pass)) {
				$this->errors[] = "Password feld was empty";
			} elseif(!empty($email) AND !empty($pass)) {
				
				$this->db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				
				if( !$this->db_con->set_charset("utf8")){
					$this->errors[] = $this->db_con->error;
				}
				
				if(!$this->db_con->connect_errno) {
					
					$email = $this->db_con->real_escape_string($email);
					
					$sql = "SELECT email, password, id
							FROM volonteri
							Where email = '" . $email . "'";
					
					$result_of_login_chk = $this->db_con->query($sql);
					
					if($result_of_login_chk->num_rows == 1) {
						$result_row = $result_of_login_chk->fetch_assoc();
						
						
						if(md5($pass) == $result_row["password"])
						{
							$_SESSION['user_email'] = $result_row['email'];
							$_SESSION['user_id'] = $result_row['id'];
							$_SESSION['is_logged_in'] = TRUE;
							$this->messages[] = "Logged in";
						}
						else {
							$this->errors[] = "Wrong password. Try again.";	
						}
					}
					else {
						$this->errors[] = "This user does not exist.";
					}
				}
				else {
					$this->errors[] = "Database connection problem.";
				}
			}
			
			$this->db_con->close();
		}
		
		public function logout()
		{
			session_unset();
			session_destroy();
			unset($_COOKIE['PHPSESSID']);
			setcookie( 'PHPSESSID', "", time()-1800, '/' );
			$_SESSION = array();
			$this-> messages[] = "You have been logged out";
		}
		
		public function is_logged_in()
		{
			if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
				return TRUE;
			}
			
			return FALSE;
		}
		
		private function register()
		{
			
			if (empty($_POST['email'])) {
				$this->errors[] = "Empty email field.";
			} elseif (empty($_POST['password'])) {
				$this->errors[] = "Empty password field";
			} elseif (!empty($_POST['email'])
				AND !empty($_POST['password'])
			) {
				// create a database connection
				$this->db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				// change character set to utf8 and check it
				if (!$this->db_con->set_charset("utf8")) {
					$this->errors[] = $this->db_con->error;
				}
				// if no connection errors (= working database connection)
				if (!$this->db_con->connect_errno) {
					$user_email = $this->db_con->real_escape_string(strip_tags($_POST['email'], ENT_QUOTES));
					$user_password = md5($_POST['password']);
					
					// check if user or email address already exists
					$sql = "SELECT * FROM volonteri WHERE email = '" . $user_email . "';";
					$query_check_user_name = $this->db_con->query($sql);
					if ($query_check_user_name->num_rows == 1) {
						$this->errors[] = "Sorry, that email address is already taken.";
					} else {
						// write new user's data into database
						$ime = $_POST['ime'];
						$prezime = $_POST['prezime'];
						$telefon = $_POST['telefon'];
						$grad = $_POST['grad'];
						$sql = "INSERT INTO volonteri (password, email, ime, prezime, telefon, grad)
								VALUES('" . $user_password . "', '" . $user_email . "', '" . $ime . "', '" . $prezime . "','"
								. $telefon . "', '" . $grad . "');";
						$query_new_user_insert = $this->db_con->query($sql);
						// if user has been added successfully
						if ($query_new_user_insert) {
							$this->messages[] = "Your account has been created successfully. You can now log in.";
						} else {
							$this->errors[] = "Sorry, your registration failed. Please go back and try again.";
						}
					}
				} else {
					$this->errors[] = "Sorry, no database connection.";
				}
			} else {
				$this->errors[] = "An unknown error occurred.";
			}
			
			$this->db_con->close();
		}
		
	}