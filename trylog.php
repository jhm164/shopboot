<!DOCTYPE html>
<html>
<head>

</head>
<body>
 <?php

 $con=mysql_connect("localhost:8080","root",'');
 $db=mysql_select_db("shopping",$con);

global $c;

 if(!db){
  echo mysql_error();
 }
$sql="select count(*) from my_log where request_uri='/shopping/index.php'";
$r=mysql_fetch_array("$sql",$con);
if(!$r){
 $count=mysql_fetch_array($r);
 echo $count[0];
}



 ?>
</body>
</html>