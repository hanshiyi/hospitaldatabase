<html>
<head>
<meta charset="utf-8"> 
<title>???? MySQL ??ݱ?/title>
</head>
<body>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$conn = mysql_connect($dbhost, $dbuser);
if(! $conn )
{
  die('fuck: ' . mysql_error());
}
echo 'connection succeed<br />';
$sql = 'CREATE DATABASE HOSPITAL';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo ('???' );
}
else{
	echo "??ݿ?HOSPITAL ?????ɹ?\n";
}#f



$sql ="CREATE TABLE employee( ".
      "employee_id INT NOT NULL AUTO_INCREMENT, ".
      "employee_department VARCHAR(100) NOT NULL, ".
      "employee_name VARCHAR(40) NOT NULL, ".
      "employee_age SMALLINT NOT NULL, ".
	    "employee_gender TINYINT NOT NULL, ". #Ա??????0?Ů?
	    "employee_account VARCHAR(100) NOT NULL, ".
	    "employee_password TEXT NOT NULL, ".
      "PRIMARY KEY ( employee_id )); ";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE patient( ".
      "patient_id INT NOT NULL AUTO_INCREMENT, ".
      "patient_name VARCHAR(40) NOT NULL, ".
      "patient_age SMALLINT NOT NULL, ".
      "patient_gender TINYINT NOT NULL, ". 
      "patient_account VARCHAR(100) NOT NULL, ".
      "patient_password TEXT NOT NULL, ".
      "PRIMARY KEY ( patient_id )); ";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE treatment( ".
      "treat_id INT NOT NULL AUTO_INCREMENT, ".
      "patient_id INT NOT NULL, ".
      "treat_illness VARCHAR(100) NOT NULL, ".
      "treat_date DATE NOT NULL, ". 
      "employee_id INT NOT NULL, ".
      "hospitalized_id INT , ".
      "ispaid BINARY(0) , ".
      "PRIMARY KEY ( treat_id )); ";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE hospitalization( ".
      "hospitalized_id INT NOT NULL AUTO_INCREMENT, ".
      "patient_id INT NOT NULL, ".
      "hospitalized_date DATE NOT NULL, ". 
      "hospitalized_duration INT NOT NULL, ".
      "PRIMARY KEY ( hospitalized_id )); ";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE payment( ".
      "payment_id INT NOT NULL AUTO_INCREMENT, ".
      "treat_id INT NOT NULL, ".
      "payment_total INT NOT NULL, ".
      "PRIMARY KEY ( payment_id )); ";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE doctor( ".
      "employee_id INT NOT NULL AUTO_INCREMENT, ".
      "employee_department VARCHAR(100) NOT NULL, ".
      "employee_name VARCHAR(40) NOT NULL, ".
      "employee_age SMALLINT NOT NULL, ".
      "employee_gender TINYINT NOT NULL, ". #Ա??????0?Ů?
      "employee_account VARCHAR(100) NOT NULL, ".
      "employee_password TEXT NOT NULL, ".
      "doctor_profession VARCHAR(100) NOT NULL, ".
      "doctor_medical_age INT NOT NULL, ".
      "PRIMARY KEY ( employee_id ));";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


mysql_close($conn);
?>
</body>
</html>