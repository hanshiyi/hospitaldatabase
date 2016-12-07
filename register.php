<!DOCTYPE html>
<?php
session_start();

$email = $_POST["email"];
$password=$_POST["password"];
$identity=$_POST["identity"];
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
if($gender=='Male')
{
	$gender=1;
}
else
{
	$gender=0;
}
echo $email;
echo $password;
echo $identity;
echo $name;
echo $age;
echo $gender;

	$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$flag = false;
mysql_select_db("hospital", $con);

if($identity == "Patient"){
	$result = mysql_query("SELECT * FROM patient where patient_account='".$email."';");
	if($row = mysql_fetch_array($result))
	{
		$flag = true;
	}
	$insert = "INSERT INTO `hospital`.`patient` (`patient_name`, `patient_age`, `patient_gender`, `patient_account`, `patient_password`) 
		VALUES (";
			"'heihei', '19', '1', 'jkasf!@kajlfl.com', '1111');";

		$insert = $insert."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".");";
		$retval = false;
		if(!$flag){
			$retval = mysql_query( $insert, $con );
		}

	if(!$retval)
	{
		$_SESSION["registerfailure"] = true;
		header("Location: signup.php");
	}
	else
	{
		header("Location: signin.php");
	}
}else if($identity == "Doctor"){
	$result = mysql_query("SELECT * FROM doctor where doctor_account='".$email."';");
	if($row = mysql_fetch_array($result))
	{
		$flag = true;
	}
	$insert = "INSERT INTO `hospital`.`doctor` ( `doctor_name`, `doctor_age`, `doctor_gender`, `doctor_account`, `doctor_password`,`doctor_profession`,`doctor_medical_age`) 
	VALUES (";"'finance', 'fcuk', '23', '1', 'fs@fg', 'df');";
	$insert = $insert."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".","."'intern'".","."'0'".");";
	$retval = false;
	if(!$flag){
			$retval = mysql_query( $insert, $con );
		}
	if(!$retval)
	{
		$_SESSION["registerfailure"] = true;
		header("Location: signup.php");
	}
	else
	{
		header("Location: signin.php");
	}
}else if($identity == "Finance"){
	$result = mysql_query("SELECT * FROM finance where  finance_account='".$email."';");
	if($row = mysql_fetch_array($result))
	{
		$flag = true;
	}
	$insert = "INSERT INTO `hospital`.`finance` ( `finance_name`, `finance_age`, `finance_gender`, `finance_account`, `finance_password`) 
	VALUES (";
	$insert = $insert."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".");";
	$retval = false;
		if(!$flag){
			$retval = mysql_query( $insert, $con );
		}
	if(!$retval)
	{
		$_SESSION["registerfailure"] = true;
		header("Location: signup.php");
	}
	else
	{
		header("Location: signin.php");
	}
}else if($identity == "Nurse"){
	$result = mysql_query("SELECT * FROM nurse where nurse_account='".$email."';");
	if($row = mysql_fetch_array($result))
	{
		$flag = true;
	}
	$insert = "INSERT INTO `hospital`.`nurse` (`nurse_name`, `nurse_age`, `nurse_gender`, `nurse_account`, `nurse_password`) 
	VALUES (";
	$insert = $insert."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".");";
	$retval = false;
		if(!$flag){
			$retval = mysql_query( $insert, $con );
		}
	if(!$retval)
	{

		$_SESSION["registerfailure"] = true;
		header("Location: signup.php");
	}
	else
	{
		header("Location: signin.php");
	}
}




mysql_close($con);
?>
