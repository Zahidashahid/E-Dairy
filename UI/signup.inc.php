

<?php

if (isset($_POST['signUpButton'])) {
	require "./include/connect.inc.php";
	//declere veriable
	$u_name = $_POST['userFullName'];
	/*$u_name  = trim($u_name);
	$u_name  = strtolower($u_name);
	$u_name  = preg_replace('/\s+/','',$u_name);*/
	$u_Email = $_POST['userEmail'];
	//triming name
	////$_POST['first_name'] = trim($_POST['first_name']);
	$_POST['userName'] = trim($_POST['userName']);
	$_POST['userName'] = strtolower($_POST['userName']);
	$_POST['userName'] = preg_replace('/\s+/','',$_POST['userName']);
	try {
		
		if(empty($_POST['userName'])) {
			throw new Exception('userName can not be empty');
			
		}
		if (is_numeric($_POST['userName'][0])) {
			throw new Exception('userName first character must be a letter!');

		}
		if(empty($_POST['userEmail'])) {
			throw new Exception('Email can not be empty');
			
		}
		if(empty($_POST['userPassword'])) {
			throw new Exception('userPassword can not be empty');
			
		}

		//username check
		//$u_check = mysql_query("SELECT Full_Name FROM user WHERE Full_Name='$u_name'");
		//$check = mysql_num_rows($u_check);
		// Check if Email already exists
		
		$e_check = mysqli_query($conn, "SELECT Email FROM user WHERE Email='$u_Email'");
		$Email_check = mysqli_num_rows($e_check);
		if (strlen($_POST['userName'])>3 && strlen($_POST['userName'])<25)
		{
			if ($Email_check == 0) {
				if (strlen($_POST['userPassword']) > 4 )
				{
					//$d = date("Y-m-d"); //Year - Month - Day
					$_POST['userName'] = strtolower($_POST['userName']);
					$_POST['userName'] = preg_replace('/\s+/','',$_POST['userName']);
					$_POST['userPassword'] = md5($_POST['userPassword']);
					$confirmCode   = substr( rand() * 900000 + 100000, 0, 6 );
					// send Email
					$msg = "
					Assalamu Alaikum... 
					
					Your activation code: ".$confirmCode."
					userName: ".$_POST['userName']."
					Signup Email: ".$_POST['userEmail']."
					
					";
						
					$result = mysqli_query($conn, "INSERT INTO user (full_name,email,username,password,user_type) VALUES ('$_POST[userFullName]','$_POST[userEmail]','$_POST[userName]','$_POST[userPassword]','$_POST[userType]')");
					$_SESSION['user_loginn'] = $_POST['userName'];
					
				
					//success message
					$success_message = '
					<h2><font face="bookman">Registration successfull!</font></h2>
					<div class="maincontent_text" style="text-align: center;">
					<font face="bookman">You can login with usename or Email. <br>
						Email: '.$u_Email.'<br>
						userName: '.$_POST['userName'].'
					</font></div>';
					
					echo $success_message;
					header("refresh:3; url = 'C:/xampp/htdocs/EDiary/UI/Admin/Diaries.php'");
				}
				else 
				{
					throw new Exception('userPassword must be 5 or more then 5 characters!');
					//header("Location:../signup.php?signup= Not susccess");
					header("refresh:3; url = 'C:/xampp/htdocs/EDiary/UI/SignUp.php'");
					echo " user name incorrect";
				}
			}
			else
			{
				throw new Exception('Email already taken!');
				echo " Email incorrect";
			}
		}
		else 
		{
			throw new Exception('userName must be 3-25 characters!');
				echo " user name incorrect  23"; 
		} 

	}
	catch(Exception $e) {
		$error_message = $e->getMessage();
		echo $error_message;
	}
}



?>