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


$sql ="CREATE TABLE doctor( ".
      "doctor_id INT NOT NULL AUTO_INCREMENT, ".
      "doctor_name VARCHAR(40) NOT NULL, ".
      "doctor_gender TINYINT NOT NULL, ". #Ա??????0?Ů?
      "doctor_age SMALLINT NOT NULL, ".
      "doctor_account VARCHAR(100) NOT NULL, ".
      "doctor_password TEXT NOT NULL, ".
      "doctor_profession VARCHAR(100) NOT NULL, ".
      "doctor_medical_age INT NOT NULL, ".
      "PRIMARY KEY ( doctor_id ));";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE nurse( ".
      "nurse_id INT NOT NULL AUTO_INCREMENT, ".
      "nurse_name VARCHAR(40) NOT NULL, ".
      "nurse_gender TINYINT NOT NULL, ". 
      "nurse_age SMALLINT NOT NULL, ".
	    "nurse_account VARCHAR(100) NOT NULL, ".
	    "nurse_password TEXT NOT NULL, ".
      "PRIMARY KEY ( nurse_id )); ";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('table initial failure: ' . mysql_error());
}
else{
  echo "table initial succeed\n";
}


$sql ="CREATE TABLE finance( ".
      "finance_id INT NOT NULL AUTO_INCREMENT, ".
      "finance_name VARCHAR(40) NOT NULL, ".
      "finance_gender TINYINT NOT NULL, ". 
      "finance_age SMALLINT NOT NULL, ".
      "finance_account VARCHAR(100) NOT NULL, ".
      "finance_password TEXT NOT NULL, ".
      "PRIMARY KEY ( finance_id )); ";
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
      "patient_gender TINYINT NOT NULL, ".
      "patient_age SMALLINT NOT NULL, ". 
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
      "doctor_id INT NOT NULL, ".
      "treat_illness VARCHAR(100) NOT NULL, ".
      "treat_date DATE NOT NULL, ". 
      "ishospitalized TINYINT, ".
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
      "treat_id INT NOT NULL, ".
      "hospitalized_date DATE NOT NULL, ". 
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
      "hospitalized_id INT ,".
      "medical_expenses INT NOT NULL, ".
      "treat_id INT NOT NULL,".
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


$sql ="CREATE TRIGGER treatment_afterdelete_on_patient ".
"AFTER DELETE ON patient ".
"FOR EACH ROW ".
"BEGIN ".
      "delete from treatment where patient_id=old.patient_id;".
" END;";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('trigger initial failure: ' . mysql_error());
}
else{
  echo "trigger initial succeed\n";
}

$sql ="CREATE TRIGGER treatment_afterdelete_on_patient".
" AFTER DELETE ON patient".
" FOR EACH ROW".
" BEGIN".
      " delete  from treatment where patient_id=old.patient_id;".
" END;";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('trigger initial failure: ' . mysql_error());
}
else{
  echo "trigger initial succeed\n";
}

$sql =" CREATE TRIGGER payment_afterdelete_on_treatment ".
" AFTER DELETE ON treatment ".
" FOR EACH ROW ".
" BEGIN ".
      " delete  from payment where treat_id=old.treat_id;".
" END;";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('trigger initial failure: ' . mysql_error());
}
else{
  echo "trigger initial succeed\n";
}

$sql ="CREATE TRIGGER treatment_afterdelete_on_doctor".
" AFTER DELETE ON doctor".
" FOR EACH ROW".
" BEGIN".
      " delete from treatment where doctor_id=old.doctor_id;".
" END;";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('trigger initial failure: ' . mysql_error());
}
else{
  echo "trigger initial succeed\n";
}


$sql ="CREATE PROCEDURE treatmentRecordnotfinance()".
" begin".
" SELECT * FROM treatment,patient where patient.patient_id=treatment.patient_id;".
" end;";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('procedure initial failure: ' . mysql_error());
}
else{
  echo "procedure initial succeed\n";
}
$sql ="CREATE PROCEDURE treatmentRecordfinance()".
" begin".
" SELECT * FROM treatment,patient where patient.patient_id=treatment.patient_id and treatment.treat_id not in(SELECT treat_id from payment);".
" end;";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('procedure initial failure: ' . mysql_error());
}
else{
  echo "procedure initial succeed\n";
}

$sql ="CREATE PROCEDURE countDoctor(in doctorid VARCHAR(100))
  BEGIN
    DECLARE number INTEGER;
    SELECT count(*) into number from treatment WHERE doctor_id=doctorid;
    SELECT number;
  END;";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('procedure initial failure: ' . mysql_error());
}
else{
  echo "procedure initial succeed\n";
}    

$sql ="CREATE PROCEDURE countPatient(in patientid VARCHAR(100))
  BEGIN
    DECLARE number INTEGER;
    SELECT count(*) into number from treatment WHERE patient_id=patientid;
    SELECT number;
  END;";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('procedure initial failure: ' . mysql_error());
}
else{
  echo "procedure initial succeed\n";
}    
mysql_close($conn);
?>
</body>
</html>