<?php
session_start();
if(isset($_SESSION["registerfailure"]) )
{
  $login = $_SESSION["registerfailure"];
  if ($login == 1) {
    $_SESSION["registerfailure"] = 0;
  echo "<script>alert(\"Duplicate account! Please use another E-mail!\")</script>";
  }
}
?>
<!DOCTYPE html>
<html lang='en'>
 <head>
    <meta charset="utf-8">
    <title>Hospital System</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	
	<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- Bootstrap core JS -->
    <script src="../../dist/js/bootstrap.min.js" ></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
	<body>
		<div class="container">
			<form class='from-signin' role='form' action="http://localhost/hospitaldatabase/register.php" method="POST" id="userForm">
			<h2 class="form-signup-heading" style="margin-left: 300px; margin-bottom: 20px">Light Hospital Register system</h2>
			<div class="dropdown" id="dropdown" style="margin-left: 500px; margin-bottom: 20px">
				<select class="btn from-control" id="selectmenu" name='identity'>
					<option>Choose your identity...</option>
					<option>Patient</option>
					<option>Doctor</option>
					<option>Finance</option>
					<option>Nurse</option>
				</select>
			</div>
		<div class="dropdown" id="dropdown1" style="margin-left: 500px; margin-bottom: 20px">
					<select class="btn from-control" id="gendermenu" name='gender'>
					<option>Choose your gender...</option>
					<option>Male</option>
					<option>Female</option>
				</select>
		</div>
        <input type="email" class="form-control" name="email" placeholder="Your Email address..." style="width:450px;margin:0 auto; margin-bottom: 15px" required autofocus>
        <input type="text" class="form-control" name="name" placeholder="Your Name..." style="width:450px;margin:0 auto; margin-bottom: 15px" required >
        <input type="number" class="form-control" name="age" placeholder="Your Age...(number)" style="width:450px;margin:0 auto; margin-bottom: 15px" required >
        <input type="password" class="form-control" id="pwd1" placeholder="Enter your password..." style="width:450px;margin:0 auto; margin-bottom: 15px" required>
		<input type="password" class="form-control" id="pwd2" name="password" placeholder="Enter your password again..." style="width:450px;margin:0 auto; margin-bottom: 15px" required>
		
			</form>
		<button class="btn btn-lg btn-primary btn-block" type="submit" id="signupbtn" onclick="check();" style="width:300px;margin:0 auto; margin-bottom: 20px">Register</button>
			<script>
			signupbtn=document.getElementById("signupbtn");
			function check()
			{
				drpdwn = document.getElementById("selectmenu");
		
				if(drpdwn.value == "Choose your identity...")
				{
					alert("Please choose your identity");
					return;
				}
				drpdwn = document.getElementById("gendermenu");
		
				if(drpdwn.value == "Choose your gender...")
				{
					alert("Please choose your gender");
					return;
				}

				pwd1 = document.getElementById("pwd1");
				pwd2 = document.getElementById("pwd2");
				if(pwd2.value != pwd1.value)
				{
					alert("两次密码应该相同！");
					return;
				}
				myForm = document.getElementById("userForm");
				myForm.submit();
			}
			</script>
		</div> <!--container-->
	</body>
</html>