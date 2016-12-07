<?php
session_start();
if(isset($_SESSION["newpaymentfailure"]) )
{
  $login = $_SESSION["newpaymentfailure"];
  if ($login == 1) {
    $_SESSION["newpaymentfailure"] = 0;
  echo "<script>alert(\"This treatment has been paid! Please check the treatment ID!\")</script>";
  }
}
if(isset($_SESSION["newpaymentsuccess"]) )
{
  $login = $_SESSION["newpaymentsuccess"];
  if ($login == 1) {
    $_SESSION["newpaymentsuccess"] = 0;
  echo "<script>alert(\"This treatment has been successfully paid!\")</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a button-container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>
	<!--header-->
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
          		<li><a href='treatmentRecord.php'>Treatment Record</a></li>
          		<li class="active"><a href='newpayment.php'>New Payment</a></li>
          		<li><a href='paymentrecord.php'>Payment Record</a></li>
              </ul>
            </div>
            
          </div>
        </nav>
        <button type="button" class="btn btn-success" onclick="LogOut();" style="float:right;  margin-right:50px;">LogOut</button>
       </div>
    </div>
	<!--//header-->
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/img/Doctor_Cover.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/img/happy-women-doctor.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/img/maleDoctor1.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/img/bigstockphoto_friendly_female_doctor_1088073.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/img/doctor2.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info">
						<h2>New Payment Record</h2>
					</div>
					 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Unpaid</span></li><!-- 
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>One way</span></li> -->
							  <div class="clearfix"></div>
						  </ul>		
						  <!---->		  	 
						 <div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																		 <div class="book_date">
																			 <form role='form' action="http://localhost/hospitaldatabase/payment.php" method="POST" id="userForm1">
																		 <h5>Treatment ID</h5>
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<select class="btn from-control" id="treatment_id" name="treatment_id" >
																					<option>Treatment ID</option>
																					<?php
																	               $con = mysql_connect("localhost","root");
																	               mysql_select_db("hospital", $con);
																					$result = mysql_query("call treatmentRecordfinance();")or die(mysql_error());
																	                mysql_close($con);
																	               $con = mysql_connect("localhost","root");
																	               mysql_select_db("hospital", $con);
																	               while($row = mysql_fetch_array($result))
																                {
																                  echo "<option>".$row["treat_id"]."</option>";
																                  
																                }
																					?>
																				</select>

																		 <h5>Expenses</h5>
																				<input type="number" placeholder="Enter expenses" id="expenses" name="expenses">
																			 </form>
																		 </div>					
																	 </li>
																	 
																	 <div class="clearfix"></div>
																</ul>
															</div>
															
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																					<button class="btn btn-lg btn-primary btn-block"  type="submit" value="Record" onclick="check();">Record</>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
							</div>		
										        					            	      
						  </div>	
					  </div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	
	
	<!-- popular-grids -->
	
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>	
	<script type="text/javascript">
		function check()
			{
				drpdwn = document.getElementById("treatment_id");
		
				if(drpdwn.value == "")
				{
					alert("Pelkjtkljlkjsklfajklfjaklfjkl");
					return;
				}
				drpdwn = document.getElementById("expenses");
		
				if(drpdwn.value == "")
				{
					alert("Expenses can not be empty!");
					return;
				}
				myForm = document.getElementById("userForm1");
				myForm.submit();
			}
	</script>	
</body>
</html>