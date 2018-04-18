<html>
<head><title>product details</title>
	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h2{
	color: black;
	margin-left: 35%;
}
a{
	
	text-decoration: none;
}

.rell{
color:black;

}
h3{
	color:black;
	font-size: 50px;
}
p{
	color: black;
}
tr{
	color:black;
	
}
table{
	margin-top: 10%;
	
}
td{
	font-size: 22px;
color:black;	

padding: 8px;
padding-left: 5px;
}	

.rell{
box-shadow: 2px 2px 2px 2px black;
	margin:8px;
	padding-top:12px;
	padding-left: 12px;
	border: solid 1px #black;
	height: 400px;
	width:400px;
	float: left;
}
.rell img:hover{
	width:350px;
	 transition: width 1s;
}
</style>


</head>
<body bgcolor="#6b6071">
	<div class="container">
<table>

<?php
include 'counter.php';
$id=$_GET["pid"]; 
global $id1;
$id1=$_GET["id"];
global $cat;
//---------------------------

	$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  global $i,$a1,$a2,$a3,$a4,$a5,$a8,$a6,$a7,$a9,$a10;
  if(!$db){
  	echo mysql_error();
  }

global $cat,$name;


$q="SELECT * FROM login WHERE id='$id1'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){

write_mysql_log($row['fname'],$row['id']);

}
}






	$q="SELECT * FROM products WHERE pid='$id'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
$cat=$row['category'];
$name=$row['name'];

}
}



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
<table class="table table-striped" >
	<tbody>
	<tr class="row-fluid offset4">
  			<td>
  			   <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="300px" width="300px"/>';	?>
  			</td>
  			
  		</tr>
  		<tr><td><?php echo 'name'; ?></td><td><?php echo $row['name']; ?></td></tr>
  		<tr><td><?php echo 'detail'; ?></td><td><?php echo $row['detail']; ?></td></tr>
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
	<tr>
		<td><a href="http://localhost:8080/shopboot/buy_product.php/?pid=<?php echo $id ?>&id=<?php echo $id1?>">buy product</a></td>
	</tr>  </tbody>
</table>

<?php
}
}



?>



<h3>Suggesions</h3>
	  <?php
	  
	$q="select * from products where category='$cat'";
  $r=mysql_query("$q",$conn);
  
  if($r){
  	while($row=mysql_fetch_array($r)){
  		 ?>
  		 <div class="rell">
  		 <?php 
  		 $id2=$row['pid'];
  		  ?>
  		<a href="http://localhost:8080/shopboot/product_detail.php/?pid=<?php echo $id2 ?>&id=<?php echo $id1?>">
  		 	 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="300px" width="300px"/>';	?>
  		 	<p><?php echo $row['name']; ?></p>
  		 	<p><?php echo $row['detail']; ?></p>
  		 	</a>
  		 </div>
  		 <?php
  		
		}
	}
	  
	  
	  
	  
	  
  	
  
  
  
  
?>
</div>
</body>
</heml>