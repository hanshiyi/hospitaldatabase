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
<html lang="en">
    <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script >
$(document).ready(function(){ 
        if(islogin){
          $("#button-container").append("<button type=\"button\" class=\"btn btn-success\" onclick=\"LogOut();\" style=\"float:right;  margin-right:50px;\">LogOut</button>")
        if(jstext=="Doctor"){
          var msg1 = "<li><a href='newTreatment.php'>New Treatment</a></li>";////////////////////////
          var msg2 = "<li><a href='treatmentRecord.php'>Treatment Record</a></li>";
          $("#navbarul").append(msg1);
          $("#navbarul").append(msg2);
        }else if(jstext=="Patient"){
          var msg1 = "<li><a href='treatmentRecord.php'>Treatment Record</a></li>";
          var msg2 = "<li><a href='paymentrecord.php'>Payment Record</a></li>"; 
          var msg3 = "<li><a href='doctorinformation.php'>Doctor Information</a></li>";////////////////////////
          $("#navbarul").append(msg1);
          $("#navbarul").append(msg2);
          $("#navbarul").append(msg3);
        }else if(jstext=="Nurse"){
          var msg1 = "<li><a href='hospitalizationinformation.php'>Hospitalization Information</a></li>";////////////////////////
          var msg2 = "<li><a href='doctorinformation.php'>Doctor Information</a></li>";
          $("#navbarul").append(msg1);
          $("#navbarul").append(msg2);
        }else if(jstext=="Finance"){
          var msg1 = "<li><a href='treatmentRecord.php'>Treatment Record</a></li>";
          var msg2 = "<li><a href='newpayment.php'>New Payment</a></li>";
          var msg3 = "<li><a href='paymentrecord.php'>Payment Record</a></li>";
          $("#navbarul").append(msg1);
          $("#navbarul").append(msg2);
          $("#navbarul").append(msg3);

        }
        
      }
      else{
          $("#button-container").append("<button type=\"button\" class=\"btn btn-primary\" onclick=\"location.href='signin.php';\" style=\"float:right;  margin-right:50px;\">SignIn</button><button style=\"float:right;  margin-botton:20px; margin-right:20px;\"type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='signup.php'\" right=\"0\">SignUp</button>")
      }
    });

</script>
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
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
              <a class="navbar-brand" href="#">Light Hospital</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" id="navbarul">
                <li class="active"><a href="#">Home</a></li>
              </ul>
            </div>
            
          </div>
        </nav>
      
      </div>
        
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/img/doctor-with-boy-child.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Patient Care</h1>
              <p>This database system is designed to improve the traditional nursing experiences. <br>The hospital can provide the patient more informations.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/img/doctor-counsels-woman-and-man.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Doctor assistance.</h1>
              <p>Doctor get access to the medical history of the patient.<br> We believe it will help the doctor to find the potential hazards in the patient's body.<br> Without a doubt, our system is condusive for both the hospital and the patient group.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/img/medical-doctor-salary.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Employee convenience.</h1>
              <p>Our dababase will help employee get access to the their own work. </p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/img/doctor-patient.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>R.J.Roberts</h2>
          <p>This database system has narrowed the distance between me and the patient, and with the help of the "One-Click Query" function, I can make a more accurate diagnosis.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/img/235086-14091ZHQ229.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Dale Smith</h2>
          <p>Since the hospital applyed this technology, I have never worried about if I forget to bring my medical records with me, and doctors' information is all posted on the Internet.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/img/2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Jeremy Lin</h2>
          <p>The database system boosted my productivity and increased my contact with staff in other departments, resulting in a significantly lower probability of erroneous billing.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

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
</script>


      <hr class="featurette-divider">



      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Developer: Michael.H & Lewis.M </p>
      </footer>

    </div><!-- /.container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- <script src="../../assets/js/docs.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
