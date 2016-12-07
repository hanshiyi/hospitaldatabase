<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$conn = mysql_connect($dbhost, $dbuser);
if(! $conn )
{
  die('fuck: ' . mysql_error());
}
echo 'connection succeed<br />';
$sql = "Insert into finance values(12001,'Bryant',0,35,'Bryant@gmail.com','12001');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into finance values(12002,'Rose',0,28,'Rose@gmail.com','12002');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into nurse values(12003,'Kardashian',1,25,'Kardashian@gmail.com','12003');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into nurse values(12004,'Alice',1,23,'Alice@gmail.com','12004');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into nurse values(12005,'Crystal',1,19,'Crystal@gmail.com','12005');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into doctor values(12006,'James',0,40,'James@gmail.com','12006','Gastroenterology',16);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12007,'Paul',0,38,'Paul@gmail.com','12007','Dermatology',13);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

$sql = "Insert into doctor values(12008,'Jordan',0,50,'Jordan@gmail.com','12008','Dermatology',30);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12009,'Angela',1,31,'Angela@gmail.com','12009','Surgery',5);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12010,'Silvia',1,24,'Silvia@gmail.com','12010','Gastroenterology',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into doctor values(12011,'Christy',1,36,'Christy@gmail.com','12011','Surgery',10);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into patient values(36501,'Curry',0,28,'Curry@gmail.com','36501');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36502,'Russell',0,20,'Russell@gmail.com','36502');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36503,'Nancy',1,15,'Nancy@gmail.com','36503');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

$sql = "Insert into patient values(36504,'Rando',0,35,'Rando@gmail.com','36505');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into patient values(36506,'Lewis',1,18,'Lewis@gmail.com','36506');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36507,'Ray',0,65,'Ray@gmail.com','36507');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36508,'Price',1,75,'Price@gmail.com','36508');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36509,'Carol',1,8,'Carol@gmail.com','36509');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into patient values(36510,'Anthony',0,25,'Anthony@gmail.com','36510');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into treatment values(10001,36501,12008,'Dermatology','2016-04-23',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10002,36502,12007,'Dermatology','2016-04-25',0);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10003,36502,12007,'Dermatology','2016-05-15',0);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10004,36503,12010,'Gastroenterology','2016-05-20',0);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into treatment values(10005,36504,12008,'Dermatology','2016-05-25',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10006,36503,12006,'Gastroenterology','2016-05-29',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10007,36505,12011,'Surgery','2016-06-08',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10008,36506,12009,'Surgery','2016-06-12',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into treatment values(10009,36507,12010,'Gastroenterology','2016-06-27',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10010,36507,12007,'Dermatology','2016-07-01',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10011,36508,12006,'Gastroenterology','2016-07-08',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10012,36509,12006,'Gastroenterology','2016-07-21',0);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10013,36508,12010,'Gastroenterology','2016-07-28',0);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10014,36510,12007,'Dermatology','2016-08-03',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into treatment values(10015,36509,12008,'Dermatology','2016-09-06',1);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into hospitalization values(20001,10001,'2016-04-23');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20002,10005,'2016-05-25');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20003,10006,'2016-05-29');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20004,10007,'2016-06-10');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into hospitalization values(20005,10008,'2016-06-12');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20006,10009,'2016-06-28');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into hospitalization values(20007,10010,'2016-07-01');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20008,10014,'2016-08-04',12);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into hospitalization values(20009,10015,'2016-09-06');";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30001,20001,1300,10001);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}

$sql = "Insert into payment (payment_id,medical_expenses,treat_id) values (30002,300,10002);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment (payment_id,medical_expenses,treat_id) values (30003,300,10003);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment (payment_id,medical_expenses,treat_id) values (30004,500,10004);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30005,20002,6000,10005);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30006,20003,4000,10006);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30007,20004,1000,10007);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30008,20005,11500,10008);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into payment values(30009,20006,800,10009);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}



$sql = "Insert into payment values(30010,20007,3500,10010);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment (payment_id,medical_expenses,treat_id) values (30011,650,10011);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment (payment_id,medical_expenses,treat_id) values (30012,550,10012);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment (payment_id,medical_expenses,treat_id) values (30013,600,10013);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30014,20008,5500,10014);";
mysql_select_db( 'hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo('insert operation failure: ' . mysql_error());
}
else{
  echo "insert operation succeed\n";
}


$sql = "Insert into payment values(30015,20009,8000,10015);";
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