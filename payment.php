<!DOCTYPE html>
<?php
session_start();

$treatment_id = $_POST["treatment_id"];
$expenses=$_POST["expenses"];



	$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$flag = false;
mysql_select_db("hospital", $con);
$hospitalize = false;

$result = mysql_query("SELECT * FROM treatment where treat_id in (select treat_id from payment);");
while($row = mysql_fetch_array($result))
{
	if($treatment_id == $row["treat_id"])
	{
		$flag = true;
	}
}
$result = mysql_query("SELECT * FROM treatment;");
while($row = mysql_fetch_array($result))
{
	if($treatment_id == $row["treat_id"])
	{
		if($row["ishospitalized"] == "1")
		{
			$hospitalize = true;
		}
	}
}
if($flag)
{
	$_SESSION["newpaymentfailure"] = true;
	header("Location: newpayment.php");
}
if($hospitalize && !$flag)
{
$time = time();

$insert = "INSERT INTO `hospital`.`hospitalization` ( `treat_id`, `hospitalized_date`) 
	VALUES ('".$treatment_id."','".date("y-m-d",$time)."');";
$retval = mysql_query( $insert, $con );
}

$result = mysql_query("SELECT * FROM hospitalization;");
while($row = mysql_fetch_array($result))
{
	if($treatment_id == $row["treat_id"])
	{
		$hospitalized_id = $row["hospitalized_id"];
	}
}
if($hospitalize){
$insert = "INSERT INTO `hospital`.`payment` (`treat_id`, `medical_expenses`, `hospitalized_id`) 
	VALUES ('".$treatment_id."','".$expenses."','".$hospitalized_id."');";
}
else
{
$insert = "INSERT INTO `hospital`.`payment` (`treat_id`, `medical_expenses`) 
	VALUES ('".$treatment_id."','".$expenses."');";
}
$retval = false;
if(!$flag){
	$retval = mysql_query( $insert, $con );
}

if(!$retval)
{
	$_SESSION["newpaymentfailure"] = true;
	header("Location: newpayment.php");
}
else
{

	$_SESSION["newpaymentsuccess"] = true;
	header("Location: newpayment.php");
}





mysql_close($con);
?>
