<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$conn = mysql_connect($dbhost, $dbuser);
if(! $conn )
{
  die('fuck: ' . mysql_error());
}
echo 'connection succeed<br />';
$sql = "Insert into employee values(12001,'finance','Bryant',35,0,'Bryant@gmail.com','12001');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into employee values(12002,'finance','Rose',28,0,'Rose@gmail.com','12002');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into employee values(12003,'nurse','Kardashian',25,1,'Kardashian@gmail.com','12003');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into employee values(12004,'nurse','Alice',23,0,'Alice@gmail.com','12004');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into employee values(12005,'nurse','Crystal',19,1,'Crystal@gmail.com','12005');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into doctor values(12006,'doctor','James',40,0,'James@gmail.com','12006','Gastroenterology',16);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12007,'doctor','Paul',38,0,'Paul@gmail.com','12007','Dermatology',13);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

$sql = "Insert into doctor values(12008,'doctor','Jordan',50,0,'Jordan@gmail.com','12008','Dermatology',30);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12009,'doctor','Angela',31,1,'Angela@gmail.com','12009','Surgery',5);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12010,'doctor','Silvia',24,1,'Silvia@gmail.com','12010','Gastroenterology',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12011,'doctor','Christy',36,1,'Christy@gmail.com','12011','Surgery',10);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into patient values(36501,'Curry',28,0,'Curry@gmail.com','36501');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36502,'Russell',20,0,'Russell@gmail.com','36502');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36503,'Nancy',15,1,'Nancy@gmail.com','36503');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

$sql = "Insert into patient values(36504,'Rando',35,0,'Rando@gmail.com','36505');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into patient values(36506,'Lewis',18,1,'Lewis@gmail.com','36506');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36507,'Ray',65,0,'Ray@gmail.com','36507');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36508,'Price',75,1,'Price@gmail.com','36508');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36509,'Carol',8,1,'Carol@gmail.com','36509');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36510,'Anthony',25,0,'Anthony@gmail.com','36510');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into treatment values(10001,36501,'Dermatology',2016-04-23,12008,20001,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment(treat_id,patient_id,treat_illness,treat_date,employee_id,ispaid) values(10002,36502,'Dermatology',2016-04-25,12007,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment(treat_id,patient_id,treat_illness,treat_date,employee_id,ispaid) values(10003,36502,'Dermatology',2016-05-15,12007,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment(treat_id,patient_id,treat_illness,treat_date,employee_id,ispaid) values(10004,36503,'Gastroenterology',2016-05-20,12010,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into treatment values(10005,36504,'Dermatology',2016-05-25,12008,20002,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10006,36503,'Gastroenterology',2016-05-29,12006,20003,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10007,36505,'Surgery',2016-06-08,12011,20004,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10008,36506,'Surgery',2016-06-12,12009,20005,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into treatment values(10009,36507,'Gastroenterology',2016-06-27,12010,20006,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10010,36507,'Dermatology',2016-07-01,12007,20007,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment(treat_id,patient_id,treat_illness,treat_date,employee_id,ispaid) values(10011,36508,'Gastroenterology',2016-07-08,12006,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment(treat_id,patient_id,treat_illness,treat_date,employee_id,ispaid) values(10012,36509,'Gastroenterology',2016-07-21,12006,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment(treat_id,patient_id,treat_illness,treat_date,employee_id,ispaid) values(10013,36508,'Gastroenterology',2016-07-28,12010,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10014,36510,'Dermatology',2016-08-03,12007,20008,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10015,36509,'Dermatology',2016-09-06,12008,20009,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into hospitalization values(20001,36501,2016-04-23,3);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20002,36504,2016-05-25,15);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20003,36503,2016-05-29,10);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20004,36505,2016-06-10,2);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into hospitalization values(20005,36506,2016-06-12,30);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20006,36507,2016-06-28,1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into hospitalization values(20007,36507,2016-07-01,8);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20008,36510,2016-08-04,12);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20009,36509,2016-09-06,23);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30001,10001,1300);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

$sql = "Insert into payment values(30002,10002,300);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30003,10003,300);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30004,10004,500);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30005,10005,6000);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30006,10006,4000);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30007,10007,1000);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30008,10008,11500);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into payment values(30009,10009,800);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into payment values(30010,10010,3500);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30011,10011,650);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30012,10012,550);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30013,10013,600);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30014,10014,5500);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30015,10015,8000);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

?>