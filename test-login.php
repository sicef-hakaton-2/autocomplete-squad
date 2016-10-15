

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Working title</title>
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
		      <a class="navbar-brand" href="index.html">Working title</a>
		    </div>
		    <!-- Collapsable part -->
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="#">About project</a></li>
		        <li><a href="#" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-circle-arrow-right"></span> Button colored</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-envelope" data-toggle="collapse" data-target="#login"></span> Sign in</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Button href</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div id="login" class="row">
				<form class="form-horizontal" method="POST" action="login.php">
					<div>
						<div class="form-group">
							<div class="col-lg-12">
								<input type="Email" class="form-control" id="Email" name="email" placeholder="Email">
							</div>
						</div>				
						 
						<div class="form-group">
							<div class="col-lg-12">
								<input type="Password" class="form-control" id="Password" name="password" placeholder="Password">
							</div>
						</div>	
						<div class="form-group">
							<div class="col-lg-12">
								<button id="logButton" type="submit" class="btn btn-primary" name="login" value="login">Sign In</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>