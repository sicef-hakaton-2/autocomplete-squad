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
		      
		      <a class="navbar-brand" href="index.php">Revo Hub</a>
		    </div>
		    <!-- Collapsable part -->
		    <div class="collapse navbar-collapse" id="myNavbar">
		      
		    </div>
		  </div>
		</nav>

		<div class="container">				  
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<form class="form-horizontal" action='register.php' method="POST">
					  <fieldset>
					    <legend>Volunteer registration form</legend>
					    <div class="form-group">
					      <label for="ime" class="col-lg-3 control-label">First name</label>
					      <div class="col-lg-7">
					        <input type="text" class="form-control" id="ime" name="ime" placeholder="First name">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="prezime" class="col-lg-3 control-label">Last name</label>
					      <div class="col-lg-7">
					        <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Last name">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="email" class="col-lg-3 control-label">E-mail</label>
					      <div class="col-lg-7">
					        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="password" class="col-lg-3 control-label">Password</label>
					      <div class="col-lg-7">
					        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="telefon" class="col-lg-3 control-label">Phone number</label>
					      <div class="col-lg-7">
					        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Phone number">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="grad" class="col-lg-3 control-label">Location (city)</label>
					      <div class="col-lg-7">
					        <input type="text" class="form-control" id="grad" name="grad" placeholder="Location (city)">
					      </div>
					    </div>

					    <div class="form-group">
					      <div class="col-lg-7 col-lg-offset-3">
					        <a href="index.php" class="btn btn-info">Cancel</a>
					        <button type="submit" class="btn btn-success" name="register">Submit</button>
					      </div>
					    </div>
					  </fieldset>
					</form>
				</div>
			</div>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>