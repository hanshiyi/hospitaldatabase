<!DOCTYPE html>
<html>
<body>

<?php
session_start();
$email = $_POST["email"];
$password=$_POST["password"];
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
	$result = mysql_query("SELECT * FROM patient");
	while($row = mysql_fetch_array($result))
	{
		if($row['patient_account'] == $email && $row['patient_password']==$password)
		{
			$flag = true;
			break;
		}
	}
}else if($identity == "Doctor"){
	$result = mysql_query("SELECT * FROM doctor");
	while($row = mysql_fetch_array($result))
	{
		if($row['doctor_account'] == $email && $row['doctor_password']==$password)
		{
			$flag = true;
			break;
		}
	}
}else if($identity == "Nurse"){
	$result = mysql_query("SELECT * FROM nurse");
	while($row = mysql_fetch_array($result))
	{
		if($row['nurse_account'] == $email && $row['nurse_password']==$password)
		{
			$flag = true;
			break;
		}
	}
}else if($identity == "Finance"){
	$result = mysql_query("SELECT * FROM finance");
	while($row = mysql_fetch_array($result))
	{
		if($row['finance_account'] == $email && $row['finance_password']==$password)
		{
			$flag = true;
			break;
		}
	}
}



mysql_close($con);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
	header("Location: signin.html");
}
if ($flag)
{
	
setcookie("email", $email, time()+3600);
setcookie("password", $password, time()+3600);
setcookie("identity", $identity, time()+3600);


$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["identity"] = $identity;
	header("Location: index.php");
}
else
{

$_SESSION["logfailure"] = true;
	header("Location: signin.php");
}
?>

</body>
</html>