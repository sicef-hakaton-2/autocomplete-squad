<?php
	require_once('session_info.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Revo Hub</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

	</head>
	<body class="body-offset">
		<div class="container-fluid">

				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
					<!-- Navbar header -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
						</button>
						<a class="navbar-brand" href="index.php">Revo Hub</a>
					</div>
					<!-- Collapsable part -->
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="#" id="btnGroup"><span class="glyphicon glyphicon-asterisk"></span> Group</a></li>
							<li><a href="#" id="btnFeed"> <span class="glyphicon glyphicon-th-list"></span> Feed</a></li>
							<li><a href="#" id="btnProfile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<!-- <li><a href="#" id="btnThird"></a></li> -->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</div>
					</div>
				</nav>

			<div class="row text-center" id="loading">
				<h1 class="top-50">Loading data...</h1>
			</div>
			<div class="row" id="group">
				<div class="col-md-6">
					<h2>Group information</h2>
					<h3>Group head info</h3>
					<form class="form-horizontal" action="#" method="POST">
						<fieldset>
						<div class="form-group">
							<label for="ime" class="col-lg-3 control-label">First name</label>
							<div class="col-lg-7">
							<input type="text" class="form-control" id="imeV" name="ime" placeholder="First name">
							</div>
						</div>
						<div class="form-group">
							<label for="prezime" class="col-lg-3 control-label">Last name</label>
							<div class="col-lg-7">
							<input type="text" class="form-control " id="prezimeV" name="prezime" placeholder="Last name">
							</div>
						</div>
						<div class="form-group">
							<label for="telefon" class="col-lg-3 control-label">Phone no.</label>
							<div class="col-lg-7">
							<input type="text" class="form-control" id="telefonV" name="telefon" placeholder="Phone no.">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-lg-3 control-label">E-mail</label>
							<div class="col-lg-7">
							<input type="email" class="form-control" id="emailV" name="email" placeholder="E-mail">
							</div>
						</div>
						<div class="form-group">
							<label for="broj_ljudi" class="col-lg-3 control-label">No. of people</label>
							<div class="col-lg-7">
							<input type="email" class="form-control" id="broj_ljudiV" name="broj_ljudi" placeholder="No. of people">
							</div>
						</div>
						<input type="button" id="btnCancel" class="btn btn-md btn-primary" value="Discard">
						<input type="button" id="btnSave" class="btn btn-md btn-success" value="Save changes">
						</fieldset>
					</form>
				</div>
				<div class="col-md-6">
					<div class="panel panel-success">
					  <div class="panel-heading">
					    <h3 class="panel-title">Group resource requests</h3>
					  </div>
					  <div class="panel-body">
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="row" id="feed">
				<h2 class="col-xs-10 col-xs-offset-1">Recent activity near your location</h2>
				<ul class="list-group col-xs-10 col-xs-offset-1" id="resList">
				  <li class="list-group-item">
				  	<div class="row">
				  		<span class="col-xs-4">Resource type</span>
				  		<span class="col-xs-8">Additional information</span>
				  	</div>
				  </li>
				</ul>
			</div>

			<div class="row" id="profile">
				<div class="col-md-6">
				<h2>Personal information</h2>
					<form class="form-horizontal" action="#" method="POST">
						<fieldset>
						<div class="form-group">
							<label for="ime" class="col-lg-3 control-label">First name</label>
							<div class="col-lg-7">
							<input type="text" class="form-control" id="ime" name="ime" placeholder="First name">
							</div>
						</div>
						<div class="form-group">
							<label for="prezime" class="col-lg-3 control-label">Last name</label>
							<div class="col-lg-7">
							<input type="text" class="form-control " id="prezime" name="prezime" placeholder="Last name">
							</div>
						</div>
						<div class="form-group">
							<label for="telefon" class="col-lg-3 control-label">Phone no.</label>
							<div class="col-lg-7">
							<input type="text" class="form-control" id="telefon" name="telefon" placeholder="Phone no.">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-lg-3 control-label">E-mail</label>
							<div class="col-lg-7">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
							</div>
						</div>
						<input type="button" id="btnCan" class="btn btn-md btn-primary" value="Discard">
						<input type="button" id="btnSav" class="btn btn-md btn-success" value="Save changes">
						</fieldset>
					</form>
				</div>
				<div class="col-md-6">
					<div class="panel panel-success">
					  <div class="panel-heading">
					    <h3 class="panel-title">Group resource requests</h3>
					  </div>
					  <div class="panel-body">
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					    <p>Placeholder</p>
					  </div>
					</div>
				</div>
			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/home.js"></script>
	</body>
</html>