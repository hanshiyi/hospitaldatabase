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
		if($row['employee_account'] == $email && $row['employee_password']==$password)
		{
			$flag = true;
			break;
		}
	}
}else{
	$result = mysql_query("SELECT * FROM employee");
	while($row = mysql_fetch_array($result))
	{
		if($row['employee_account'] == $email && $row['employee_password']==$password)
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

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["identity"] = $identity;
	header("Location: index.php");
}
else
{
	header("Location: signin.html");
}
?>

</body>
</html>