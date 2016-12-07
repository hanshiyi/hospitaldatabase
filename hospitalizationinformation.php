<?php 
  session_start();
 

  if(isset($_COOKIE["email"])){
    $email = $_COOKIE["email"];
    $identity = $_COOKIE["identity"];
    echo "<script>var islogin=true;var jstext='$identity';</script>";  
  }
  else
  {
    echo "<script>var islogin=false;</script>";
  } 
  ?>

<script src="js/jquery.min.js"></script>
  <script >
$(document).ready(function(){ 
        if(!islogin){
        alert("Cookie outdated.");
        window.location.href="signin.php";
      }
    });

</script>
<html lang="en">
    <script type="text/javascript" src="jquery-1.11.1.min.js"></script>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Hospital Control Center</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="treatment.css" rel="stylesheet">

  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container" id = "button-container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Light Hospital</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="navbarul">
                <li ><a href="index.php">Home</a></li>
                <li class="active"><a href='hospitalizationinformation.php'>Hospitalization Information</a></li>
                <li><a href='doctorinformation.php'>Doctor Information</a></li>
              </ul>
            </div>
            
          </div>
        </nav>
       </div>
    </div>
    <div>
    <div id="panel_Profile" class="#main">
          <ul class="panel_head"><span><?php echo $identity?></span></ul>
          <ul class="panel_body profile">
          <div id="blog_userface" class="#left">
          <a href="http://my.csdn.net/huachao1001" target="_blank">
          <img src="images/img/3.jpg" title="访问我的空间" style="max-width:90%"/>
          </a>
          <br />
          <span><a  class="user_name" >
          <?php

          $con = mysql_connect("localhost","root");

          if (!$con)
            {
            die('Could not connect: ' . mysql_error());
            }

          mysql_select_db("hospital", $con);

            $result = mysql_query("SELECT * FROM nurse;");
            while($row = mysql_fetch_array($result))
            {
              
              if($email == $row["nurse_account"]){
                echo $row["nurse_name"];
              }
            }
          
          ?></a></span>
        </div>
        <div id="search-div" class="#right" style="display: inline;">
          
        </div>
      <div class="form_class">
        <table class="table table-bordered" id="targetform">
          
          <?php
          echo "<tr>
          <th>Patient Name</th>
          <th>Enter date</th>
          </tr>";
          $result = mysql_query("SELECT * FROM hospitalization;");
          while($row = mysql_fetch_array($result))
          {
            $pa = mysql_query("SELECT * FROM treatment where treat_id='".$row["treat_id"]."';");
            while($r = mysql_fetch_array($pa))
            {
              $ppap = mysql_query("SELECT * FROM patient where patient_id='".$r["patient_id"]."';");
            while($rr = mysql_fetch_array($ppap))
            {
                $patient_name = $rr["patient_name"];
            }
            }
          echo "<tr><td>".$patient_name."</td><td>".$row["hospitalized_date"]."</td></tr>";
          }
          
          ?>
        </table>
        </div>
        
        </div>

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Developer: Michael.H & Lewis.M </p>
      </footer>

    	
    <script type="text/javascript">
    function delCookie($name){    
                var myDate=new Date();    
                myDate.setTime(-1000);//设置时间    
                document.cookie=$name+"=''; expires="+myDate.toGMTString();                
          }     
      function LogOut()
      {
          delCookie("email");
          delCookie("identity");
           window.location.href="index.php";
      }
      function submitContent()
      {
        delCookie("targetPatient");
         var input =  document.getElementById("contentinput");
        setCookie("targetPatient",input.value);
        alert(input.value);
        //window.location.href="treatmentRecord.php";
      }
      function setCookie(name,value)
      {
      var Days = 30;
      var exp = new Date();
      exp.setTime(exp.getTime() + Days*24*60*60*1000);
      document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
      }
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- <script src="../../assets/js/docs.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
