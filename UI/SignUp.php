<?php 	
	include("../DataAccessLayer/signup.inc.php"); 
	$objDatabaseController = new DatabaseController;
	$objQueryProcessor = $objDatabaseController->getInstanceOfQueryProcessor();
	$objQueryProcessor->addNewUser();
?>

<html>
<head>
	<titlt> </title>
	<link rel = "stylesheet" href = ".\Bootstrap\theme\vibrant-sea\css\bootstrap4-vibrant-sea.min.css" type = "text/css" > </link>
	<link rel = "stylesheet" href = "SignUpCSS.css" type = "text/css" > </link>
</head>
	<body>
		  <div class="bg-primary navbar-dark text-white">
			<div class="container">
				<span id = "logo" class="float-left">
					<img src = "./Images/logo.png" alt = "logo"/> 
				</span>
			  <nav class="navbar px-0 navbar-expand-lg navbar-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a href="" class="pl-md-0 p-3 text-white">Home</a>
						<a href="" class="p-3 text-white">About Us</a>
						<a href="" class="p-3 text-white">Contact Us</a>
					</div>
					<span class = "p-3 text-decoration-none text-white float-right"> 
							Have an acccount? &nbsp; 
							<a id = "logInButton" class="btn btn-secondary btn-shadow btn-lg my-3 ml-1 ml-md-3 text-left" href = "index.php" />
							Sign In </a>
					</span>
				</div>
			  </nav>

			</div>
		  </div>


		  

		 <div class="jumbotron bg-primary text-white mb-0 radius-0">
			<div class="container">
				<div class = "Mid" >
					<div class = "text-white logInDiv radius-0 rounded-0 mb-0 ">
						<h1 class="display-5" >Join E Dairy</h1>
						<form name = "logInForm" class = " bg-primary" action="../DataAccessLayer/signup.inc.php" method="post">
							<label>Full Name</label> <input class = "form-control" name = "userFullName" id = "userFullName" type = "text" placeholder = "Full Name" required />
							<label>Email</label> <input  class = "form-control" name = "userEmail" id = "userEmail" type = "text" placeholder = "Email" required /> 
							<label>Username</label> <input  class = "form-control" name = "userName" id = "userName" type = "text" placeholder = "Username" required /> 
							<label>Password</label> <input  class = "form-control" name =  "userPassword" id = "userPassword" type = "password" placeholder = "Password" required /> 
							<label>Confirm Password</label><input  class = "form-control" name = "userConfirmPassword" id = "userConfirmPassword" type = "password" placeholder = "Confirm Password" required /> 
							<span class="font-weight-bold"> I am a<span/>
							<select name = "userType" class = "custom-select w-30"> 
								<option value = "parent" >Parent</option>
								<option value = "student" >Student</option>
								<option value = "teacher" >Teacher</option>
								<option value = "admin" >Admin</option>
							</select>
							<div class = "Mid2"> 
								<input name = "signUpButton" id = "signUpButton" class="btn btn-info btn-shadow btn-lg my-3 ml-1 ml-md-0 text-left" type = "submit" value = "Sign Up"
								>
							</div>
						</form> 
					</div>
				</div>
			</div>
		</div>
	</body>
</html>