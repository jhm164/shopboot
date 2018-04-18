<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>afafa</h1>
<?php
global $u,$cars;
function pr(){
	$u=$_GET['u'];
global $i,$c,$t;
	$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);
global $co;
if(!$db){
	echo mysql_error();
	
}


$cars = array( "/shopping/index.php/?menu=1", "/shopping/index.php/?menu=2","/shopping/index.php/?menu=3","/shopping/index.php/?menu=4","/shopping/product_detail.php/?pid=37&id=7");
$c=sizeof($cars);


$i=0;

$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
 
  if(!$db){
  	echo mysql_error();
  }


global $cc;
while($i!=$c){
$x=0;
	

$q="SELECT * FROM my_log WHERE request_uri='$cars[$i]' and message='$u'";

$r=mysql_query("$q",$conn);

	while($row=mysql_fetch_array($r)){

$x+=1;
}
$cc[$i]=$x;
echo $cc[$i]."\n";


$i+=1;

}


$i=0;
$o=0;
while(!$i>=$c){
if($cc[$i]>$cc[$i+1]){
	$o=$cc[$i];
	$i+=1;
}else{
	$o=$cc[$i+1];
	$i+=1;
}

$i+=1;
}


$i=0;
$k;

while($i!=$c){
if($cc[$i]==$o){
	
	$k=$i;
}

$i++;
}



return array($k,$o);
}


$rrr=array_values(pr());
$url;
$url=$rrr[1];
echo "user ".$u."intrested in ".$rrr[1].$cars[$url];
?>
</body>
</html>