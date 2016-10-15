<?php
	
	require_once("config/db.php");
	require_once("config/consts.php");
	require_once("libraries/Auth.php");
	
	$sess = new Auth();
	
	if($sess->is_logged_in()){
		header('Location: ' . BASE_URL . 'index.php');
		die();
	}