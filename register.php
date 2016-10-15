<?php 
	
	require_once('config/db.php');
	require_once('config/consts.php');
	require_once('libraries/Auth.php');
	
	$auth = new Auth();
	
	header("Location:".BASE_URL."index.php");