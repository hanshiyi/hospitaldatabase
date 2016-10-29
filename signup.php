<!DOCTYPE html>
<?php

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
	$insert = "INSERT INTO `hospital`.`patient` (`patient_name`, `patient_age`, `patient_gender`, `patient_account`, `patient_password`) 
		VALUES (";
			"'heihei', '19', '1', 'jkasf!@kajlfl.com', '1111');";

		$insert = $insert."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".");";
		$retval = mysql_query( $insert, $con );
	if(!$retval)
	{
		header("Location : signup.html");
	}
	else
	{
		header("Location: signin.html")
	}
}else if($identity == "Doctor"){
	$insert = "INSERT INTO `hospital`.`employee` (`employee_department`, `employee_name`, `employee_age`, `employee_gender`, `employee_account`, `employee_password`) 
	VALUES (";"'finance', 'fcuk', '23', '1', 'fs@fg', 'df');";
	$insert = $insert."'".$identity."'".","."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".");";
		$retval = mysql_query( $insert, $con );
	if(!$retval)
	{
		header("Location : signup.html");
	}
	else
	{
		header("Location: signin.html");
	}
}else{
	$insert = "INSERT INTO `hospital`.`doctor` (`employee_department`, `employee_name`, `employee_age`, `employee_gender`, `employee_account`, `employee_password`) 
	VALUES (";
	$insert = $insert."'"."doctor"."'".","."'".$name."'".","."'".$age."'".","."'".$gender."'".","."'".$email."'".","."'".$password."'".");";
		$retval = mysql_query( $insert, $con );
	if(!$retval)
	{
		header("Location : signup.html");
	}
	else
	{
		header("Location: signin.html");
	}
}




mysql_close($con);
?>
