<!DOCTYPE html>
<html>
<body>

<?php
session_start();
$email = $_POST["email"];
$identity=$_POST["identity"];
//setcookie('cook',$email);
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$flag = false;
mysql_select_db("hospital", $con);

if($identity == "Patient"){
	$result = mysql_query("delete  from patient where patient_account='".$email."';");
	if(!$result)
	{
		$_SESSION["deletefailure"] = true;
	}
	
}else if($identity == "Doctor"){
	$result = mysql_query("delete  from doctor where doctor_account='".$email."';");
	if(!$result)
	{
		$_SESSION["deletefailure"] = true;
	}
	
}else if($identity == "Nurse"){
	$result = mysql_query("delete  from nurse where nurse_account='".$email."';");
	if(!$result)
	{
		$_SESSION["deletefailure"] = true;
	}
	
}else if($identity == "Finance"){
	$result = mysql_query("delete  from finance where finance_account='".$email."';");
	if(!$result)
	{
		$_SESSION["deletefailure"] = true;
	}
	
}



mysql_close($con);



header("Location: administrator.php");

?>

</body>
</html>