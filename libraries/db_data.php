<?php
	
	require_once('../config/db.php');
	require_once('../config/consts.php');
	require_once('../models/group.php');
	require_once('../models/volounteer.php');
	require_once('../models/resources.php');
	
	
	session_start();
	
	function get_group_info()
	{
		$errors = array();
		
		if(isset($_SESSION['is_logged_in'])) {	
			
			$db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			
			if( !$db_con->set_charset("utf8"))
			{
				$errors[] = $db_con->error;
			}
			
			if(!$db_con->connect_errno) {
				
				$sql = "SELECT * 
						FROM volonteri
						WHERE id = ". $_SESSION['user_id'];
						
				$volonter_res = $db_con->query($sql);
				
				if($volonter_res->num_rows == 0) {
					$errors[] = "There is no such volounteer.";
				}
				
				$volonter_res = $volonter_res->fetch_object();
				
				if($volonter_res->zauzet == FALSE){
					$errors[] = "Volounteer doesn't manage any group.";
				}
				
				$sql = "SELECT id, broj_ljudi, aktivna, transport, id_vodje 
						FROM grupa
						WHERE id_volontera = ". $_SESSION['user_id'];
				
				$grupa_res = $db_con->query($sql);
				
				if($grupa_res->num_rows == 0) {
					$errors[] = "There is no such gorup";
				}
				print_r($errors);
				$grupa_res = $grupa_res->fetch_object();
				
				$sql = "SELECT * 
						FROM vodja
						WHERE id = ". $grupa_res->id_vodje;
						
				$vodja_res = $db_con->query($sql);
				
				if($vodja_res->num_rows == 0) {
					$errors[] = "There is no such gorup";
				}
				
				$vodja_res = $vodja_res->fetch_object();
				
				$group = new Group();
				$group->id = $grupa_res->id;
				$group->broj_ljudi = $grupa_res->broj_ljudi;
				$group->aktivna = $grupa_res->aktivna;
				$group->trasport = $grupa_res->transport;
				$group->volonter = $volonter_res;
				$group->vodja = $vodja_res;
				$group->errors = $errors;
				
				$group->return_json();
				
				$db_con->close();
				return;
			}
		}
		
		header('Location: index.php');
			
			
	}
	
	function get_profile_info()
	{
		$errors = array();
		
		if(isset($_SESSION['is_logged_in'])) {	
			
			$db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			
			if( !$db_con->set_charset("utf8"))
			{
				$errors[] = $db_con->error;
			}
			
			if(!$db_con->connect_errno) {
				
				$sql = "SELECT * 
						FROM volonteri
						WHERE id = ". $_SESSION['user_id'];
						
				$volonter_res = $db_con->query($sql);
				
				if($volonter_res->num_rows == 0) {
					$errors[] = "There is no such volounteer.";
				}
				
				$volonter_res = $volonter_res->fetch_object();
				
				
				$volounteer = new Volounteer();
				$volounteer->id = $volonter_res->id;
				
				$volounteer->return_json();
				
				$db_con->close();
				return;
			}
		}
		
		header('Location: index.php');
	}
	
	function get_near_resource_needs()
	{
		$errors = array();
		
		if(isset($_SESSION['is_logged_in'])) {	
			
			$db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			
			if( !$db_con->set_charset("utf8"))
			{
				$errors[] = $db_con->error;
			}
			
			if(!$db_con->connect_errno) {
				
				$sql = "SELECT tip,id_grupe,
						FROM resursi,grupa,volonteri,vodja
						WHERE vodja.lokacija = volonteri.lokacija
						AND IS NOT NULL resurs.id_grupe 
						AND grupa.id_vodje = vodja.id
						AND volonteri.id = " . $_SESSION['user_id'];
						
				$resurs_res = $db_con->query($sql);
				
				if($resurs_res->num_rows == 0) {
					$errors[] = "There are no resources near you.";
				}
				
				$resurs_res = $resurs_res->fetch_all();
				
				 $resources_array = array();
				
				foreach($resurs_res as $rr):
					$resource = new Resource();
					$resource->id = $rr['id'];
					$resource->tip = $rr['tip'];
					$resource->id_grupe = $rr['id_grupe'];
					$resource->id_volontera = $rr['id_volontera'];
					$resources_array[] = $rr.return_json();
				endforeach;
				
				$db_con->close();
				print_r($resources_array);
			}
		}
		
		header('Location:'.BASE_URL.' index.php');
	}