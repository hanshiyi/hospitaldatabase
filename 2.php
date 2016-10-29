<html>
<head>
<meta charset="utf-8"> 
<title>PHP MySQL</title>
</head>
<body>
<?php
   echO 'akjslf';
   $concon=mysql_connect("localhost:3306",'root');
   if(!$concon)
   {
		die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   mysql_close($concon);
?>
</body>
</html>