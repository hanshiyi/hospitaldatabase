<?php
session_start();
if(isset($_SESSION["deletefailure"]) )
{
  $login = $_SESSION["deletefailure"];
  if ($login == 1) {
    $_SESSION["deletefailure"] = 0;
  echo "<script>alert(\"E-mail can not be found!\")</script>";
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

    <div class="container">

      <form class="form-signin" role="form" action="http://localhost/hospitaldatabase/deleteaccount.php" method="POST" id="userForm">
        <h2 class="form-signin-heading" style="margin-left: 300px; margin-bottom: 20px">Light Hospital Account administration system</h2>
    <div class="dropdown" id="dropdown" style="margin-left: 200px; margin-bottom: 20px">
      <select class="btn from-control" id="selectmenu" name="identity" >
        <option>Choose your identity...</option>
        <option>Patient</option>
        <option>Doctor</option>
        <option>Finance</option>
        <option>Nurse</option>
      </select>
    </div>
        <input type="email" class="form-control" name="email" placeholder="Email address" id="emailid"  style="width:450px;margin:0 auto; margin-bottom: 15px"  required autofocus>
     </form>
        <button class="btn btn-lg btn-primary btn-block from-control" type="submit" style="width:300px;margin:0 auto; margin-bottom: 20px" id="signinbtn" onclick="check();">Delete</button>
     
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
  <table class="table table-bordered">
  <?php
  echo "<tr>
                <th>Account</th>
                <th>identity</th>
                </tr>";

               
               $con = mysql_connect("localhost","root");
               mysql_select_db("hospital", $con);
                $result = mysql_query("select * from patient;")or die(mysql_error());
                while($row = mysql_fetch_array($result))
                {
                  
                  echo "<tr><td>".$row["patient_account"]."</td><td>"."Patient"."</td></tr>";
                  
                }
                $result = mysql_query("select * from doctor;")or die(mysql_error());
                while($row = mysql_fetch_array($result))
                {
                  
                  echo "<tr><td>".$row["doctor_account"]."</td><td>"."Doctor"."</td></tr>";
                  
                }
                $result = mysql_query("select * from finance;")or die(mysql_error());
                while($row = mysql_fetch_array($result))
                {
                  
                  echo "<tr><td>".$row["finance_account"]."</td><td>"."Finance"."</td></tr>";
                  
                }
                $result = mysql_query("select * from nurse;")or die(mysql_error());
                while($row = mysql_fetch_array($result))
                {
                  
                  echo "<tr><td>".$row["nurse_account"]."</td><td>"."Nurse"."</td></tr>";
                  
                }
                ?></table>
    </div> <!-- /container -->
  
  </body>
</html>
