<?php 
	require($_SERVER['DOCUMENT_ROOT'] . 'RepoWeb/includes/dbFunctions.php');
	
	//$username = $_POST['username'];
	//$pass = $_POST['pass'];
	
	//createAccount($username,$pass);
	
	include('view/header.php');
	include('view/body.php');
	echo $username;
	echo $pass;
	include('view/footer.php');