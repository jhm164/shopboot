</html>
<html>
<head><title>try filter</title>

<link rel="icon" type="image/gif/png" href="http://localhost:8080/shopboot/images/cart.png">
</head>
<body>


<?php
$pid=$_GET['pid'];
$id=$_GET['id'];



		$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  global $i,$a1,$a2,$a3,$a4,$a5,$a8,$a6,$a7,$a9,$a10;
  if(!$db){
  	echo mysql_error();
  }

global $cat,$name;
	$q="SELECT * FROM products WHERE pid='$pid'";

$r=mysql_query("$q",$conn);;

if($r){
	
	while($row=mysql_fetch_array($r)){
$cat=$row['category'];
$name=$row['name'];

}
}






  //--------------------
		$q="SELECT * FROM category WHERE category_v=$cat";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		
	$a1=  $row['c1'];
	$a2=  $row['c2'];
	$a3=  $row['c3'];
	$a4=  $row['c4'];
	$a5=  $row['c5'];
	$a6=  $row['c6'];
	$a7=  $row['c7'];
		$a8=  $row['c8'];
		$a9=  $row['c9'];
		$a10=  $row['c10'];

	
	}
}

$c="cat".$cat ;


	$q="SELECT * FROM $c WHERE name='$name'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		

echo $row['detail'];
?>
<table>
	
	<tr><td><?php echo $a1 ?></td><td><?php echo $row[$a1]; ?></td></tr>
	<tr><td><?php echo $a2 ?></td><td><?php echo $row[$a2]; ?></td></tr>
	<tr><td><?php echo $a3 ?></td><td><?php echo $row[$a3]; ?></td></tr>
	<tr><td><?php echo $a4 ?></td><td><?php echo $row[$a4]; ?></td></tr>
	<tr><td><?php echo $a5 ?></td><td><?php echo $row[$a5]; ?></td></tr>
	<tr><td><?php echo $a6 ?></td><td><?php echo $row[$a6]; ?></td></tr>
	<tr><td><?php echo $a7 ?></td><td><?php echo $row[$a7]; ?></td></tr>
	<tr><td><?php echo $a8 ?></td><td><?php echo $row[$a8]; ?></td></tr>
	<tr><td><?php echo $a9 ?></td><td><?php echo $row[$a9]; ?></td></tr>
	<tr><td><?php echo $a10 ?></td><td><?php echo $row[$a10]; ?></td></tr>
</table>

<?php
}
}



?>



</body>
</html>