<?php
session_start();
if(isset($_SESSION["logfailure"]) )
{
  $login = $_SESSION["logfailure"];
  if ($login == 1) {
    $_SESSION["logfailure"] = 0;
  echo "<script>alert(\"E-mail/password don't nmn,".(string)$login.",mmatch.\")</script>";
  }
}
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hospital System</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
  
  <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- Bootstrap core JS -->
    <script src="../../dist/js/bootstrap.min.js" ></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="morph-content">
      <div>
        <div class="content-style-form content-style-form-1">
          <form class="form-signin" role="form" action="http://localhost/hospitaldatabase/jump.php" method="POST" id="userForm">
              <h2 class="form-signin-heading">Light Hospital Register system</h2>
              <div class="dropdown" id="dropdown">
                  <select class="btn from-control" id="selectmenu" name="identity" >
                      <option>Choose your identity...</option>
                      <option>Patient</option>
                      <option>Doctor</option>
                      <option>Finance</option>
                      <option>Nurse</option>
                  </select>
              </div>
              <input type="email" class="form-control" name="email"placeholder="Email address" id="emailid" required autofocus>
              <input type="password"  class="form-control" name="password" placeholder="Password" required>
              <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
              </div>
         </form>
     </div>
     </div>
        <button class="btn btn-lg btn-primary btn-block from-control" type="submit" id="signinbtn" onclick="check();">Sign in</button>
        <button class="btn btn-lg btn-primary btn-block from-control" id="signupbtn" type="submit" onclick="window.location.href='./signup.php'">Sign up</button>
     
  <script language="javascript">
  signinbtn=document.getElementById("signinbtn");
  function  check()
  {
    drpdwn = document.getElementById("selectmenu");
    
    if(drpdwn.value == "Choose your identity...")
    {
      alert("Please choose your identity");
      return;
    }
    myForm = document.getElementById("userForm");
    myForm.submit();
    
  }
  </script>
    </div> <!-- /container -->
  
  </body>
</html>
