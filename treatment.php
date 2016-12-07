<!DOCTYPE html>
<?php
session_start();
  if(isset($_COOKIE["email"])){
    $email = $_COOKIE["email"];
    $identity = $_COOKIE["identity"];
    $login = true; 
}
$patientaccount = $_POST["patientaccount"];
$illdescription=$_POST["illdescription"];
if(isset($_POST["hospitalize"])){
	$hospitalize = '1';
}
else
{
	$hospitalize = '0';
}



	$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hospital", $con);
$patient_id = 'null';
$result = mysql_query("SELECT * FROM  patient;");
while($row = mysql_fetch_array($result))
{
	if($patientaccount == $row["patient_account"])
	{
		$patient_id = $row["patient_id"];
	}
}
if($patient_id != 'null'){
	$result = mysql_query("SELECT * FROM  doctor;");
	while($row = mysql_fetch_array($result))
	{
		if($email == $row["doctor_account"])
		{
			$doctor_id = $row["doctor_id"];
		}
	}
	$time = time();
	$insert = "INSERT INTO `hospital`.`treatment` ( `patient_id`, `doctor_id`, `treat_illness`, `treat_date`, `ishospitalized`) VALUES ('".$patient_id."','".$doctor_id."','".$illdescription."','".date("y-m-d",$time)."','".$hospitalize."');";
	$retval = mysql_query( $insert, $con );
}
if($patient_id=='null' || !$retval)
{
	$_SESSION["newtreatmentfailure"] = true;
	header("Location: newtreatment.php");
}
else
{
	$_SESSION["newtreatmentsuccess"] = true;
	header("Location: newtreatment.php");
}
mysql_close($con);
?>
