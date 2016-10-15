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
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		  	<!-- Navbar header -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="#">Revo Hub</a>
		    </div>
		    <!-- Collapsable part -->
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <!-- <li><a href="#">About project</a></li> -->
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a data-target="#collapse-form" data-toggle="collapse"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">

			<div id="collapse-form" class="col-xs-12 col-md-6 col-md-offset-3 form-background shadow collapse">
					<form class="form-horizontal" action='login.php' method="POST">
					  <fieldset>
					    <legend>Login</legend>
					    <div class="form-group">
					      <label for="email" class="col-lg-3 control-label">E-mail</label>
					      <div class="col-lg-7">
					        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="password" class="col-lg-3 control-label">Password</label>
					      <div class="col-lg-7">
					        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
					      </div>
					    </div>
					    <div class="form-group">
					      <div class="col-lg-7 col-lg-offset-3">
					        <button type="submit" class="btn btn-success" name="register">Submit</button>
					      </div>
					    </div>
					  </fieldset>
					</form>
				</div>

			<div class="jumbotron text-center border-colored text-shadow">
			  <h1>Revo Hub<br><small>Fast response volunteer network and refugee situation handling.</small></h1>
			  <div class="row">
				  <div class="col-xs-6 text-right">
				  	<h3>Need assistance?<br><small class="hidden-xs">Register yourself as a group frontman and find yourself a volunteer to help you with any issues you might have.</small></h3>
				  </div>
				  <div class="col-xs-6 text-left">
				  	<h3>Want to help?<br><small class="hidden-xs">Register yourself as a volunteer and start helping now!</small></h3>
				  </div>
				</div>
				<div class="row">
				  <div class="col-xs-6 text-right">
				  	<a href="gregister.php" class="btn btn-danger btn-lg shadow">Apply</a>
				  </div>
				  <div class="col-xs-6 text-left">
				  	<a href="vregister.php" class="btn btn-success btn-lg shadow">Register</a>
				  </div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<div class="well border-colored">
					  <div class="row">
					  	<div class="col-xs-12 big-icon text-center">
					  		<span class="glyphicon glyphicon-time"></span>
					  	</div>
					  	<div class="col-xs-12">
					  		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					  	</div>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="well border-colored">
					  <div class="row">
					  	<div class="col-xs-12 big-icon text-center">
					  		<span class="glyphicon glyphicon-camera"></span>
					  	</div>
					  	<div class="col-xs-12">
					  		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					  	</div>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="well border-colored">
					  <div class="row">
					  	<div class="col-xs-12 big-icon text-center">
					  		<span class="glyphicon glyphicon-upload"></span>
					  	</div>
					  	<div class="col-xs-12">
					  		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					  	</div>
					  </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="well well-sm">
						<span>Copyright 2015. Autocomplete Squad</span>
					</div>
				</div>
			</div>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>