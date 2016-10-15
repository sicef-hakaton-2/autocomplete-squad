<?php

require_once('../config/db.php');
require_once('../config/consts.php');
//session_start();
			
			$errors = array();
			$messages = array();
			$db_con;
			if (empty($_POST['telefon'])) {
				$errors[] = "Empty phone field.";
			} elseif (empty($_POST['ime'])) {
				$errors[] = "Empty  field";
			} elseif (empty($_POST['prezime'])) {
				$errors[] = "Empty last name field";
			} elseif (!empty($_POST['telefon'])
				AND !empty($_POST['ime'])
				AND !empty($_POST['prezime'])
			) {
				// create a database connection
				$db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				// change character set to utf8 and check it
				if (!$db_con->set_charset("utf8")) {
					$errors[] = $db_con->error;
				}
				// if no connection errors (= working database connection)
				if (!$db_con->connect_errno) {
					$user_email = $db_con->real_escape_string(strip_tags($_POST['email'], ENT_QUOTES));
					
					// check if user or email address already exists
						// write new user's data into database
						$ime = $_POST['ime'];
						$prezime = $_POST['prezime'];
						$telefon = $_POST['telefon'];
						$lokacija = $_POST['lokacija'];
						$broj_ljudi = $_POST['broj_ljudi'];
						
						$sql = "INSERT INTO vodja (telefon, ime, prezime, lokacija, email, smartphone)
								VALUES('" . $telefon . "', '" . $ime . "', '" . $prezime . "', '" . $lokacija . "','"
								. $user_email . "', '" . $lokacija . "');";
						$db_con->query('COMMIT;');
						$query_new_user_insert = $db_con->query($sql);
						$lead_id = $db_con->insert_id;
						// if user has been added successfully
						if ($query_new_user_insert) {
							$messages[] = "Your account has been created successfully. You can now log in.";
						} else {
							$errors[] = "Sorry, your registration failed. Please go back and try again.";
						}

						$sql = "INSERT INTO grupa (broj_ljudi, id_vodje)
								VALUES('" . $broj_ljudi . "', '" . $lead_id . "');";
						$query_new_user_insert = $db_con->query($sql);

						print_r($query_new_user_insert);
					
				} else {
					$errors[] = "Sorry, no database connection.";
				}
			} else {
				$errors[] = "An unknown error occurred.";
			}
			
			$db_con->close();
			header("Location:".BASE_URL."index.php");
?>