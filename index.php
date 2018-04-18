<html>
<head><title>Shop me</title>


	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
	
	function  k() {
    document.cookie = user1616 + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}


	
function   g(x){


var xmlhttp=new XMLHttpRequest();


xmlhttp.onreadystatechange = function() {


	 if (this.readyState == 4 && this.status == 200) {

	document.getElementById(x).innerHTML=this.responseText;
}
};
//var x;
//x=33;

xmlhttp.open("GET","http://localhost:8080/shopboot/queryp.php?pid="+x,true);
xmlhttp.send();

}







</script>
<style>

.left h3{
	color: white;
	float:right;
	
}
.left input[type=button]{
float: right;
}
details{
	float: right;
	text-decoration: none;
	box-decoration-break: none;
}
b{
	color:red;
}

.footer {
	color:white;
	
}
.left h1{
	margin-left: 15px;
	color: white;
	
	
}
.left{
		position: relative;
		height:auto;
		width:100%;
		overflow: auto;
		background-color:#034947 ;
		
	}
	
	.product_box{
		
		margin: 20px;
		margin-top: 10px;
		border:solid 1px white;
		 
	}
	.single_product{
		
		align-content: center;
		width:400px;
		height: 500px;
		margin: 50px;

		margin-left: 50px;
		padding:8px;
		margin: 2px;
	
		color:black;
		float:left;
	}
	.single_product a{
		color:black;
		text-decoration:none;
		
	}
	.list-grooup li:hover{
		color: red;
	}
	.left li a{
		padding-left: 12px;
		color: white;
		margin-left: 8px;
		color:white;
		text-decoration: none;
		
	}
	.left li{
		float: left;
		text-decoration: none;
	}
.left ul{
	list-style-type: none;
	
}
.cart{
	float:right;
}
	
.single_product	img:hover{
		width: 250;
		transition-duration: 4s;
	}
	.left h1{
	margin: center;
		color: :white;
	}
	h3{
		color:white;
		float:right;
	}
	.pdetail{
		margin-left:12px; 
				position: relative;
		float:right;
	}
	.pdetail input[type=button]
	{
background: skyblue;
color:black;
font-size: 18px;
	}
	h3{
		color:blue;
	}
	.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: right;

   opacity: 0.7;
}
</style>
</head>
<body bgcolor="#FDF3FB">
	

<div class="container-fluid">

<?php



 include 'counter.php';

global $u;
global $p;



$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);

global $veri;
if(!$db){
	echo mysql_error();
	
}

if(!isset($_COOKIE['pass1616'])&&!isset($_COOKIE['user1616'])) {
 
    if(!empty($_POST['username'])&& !empty($_POST['password'])){
 $u=($_POST['username']);
 $p=($_POST['password']);

}else{
	echo "<script type='text/javascript'>alert('Continue without login');</script>";
	
}
} else {
    $u= $_COOKIE['user1616'];
     $p= $_COOKIE['pass1616'];
}



$sql="select * from login where username='$u' and password='$p'";
 $r=mysql_query("$sql",$conn);
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row

global $xx;
if ($count==1) {
	$cookie_name = "user1616";
$cookie_value = $u;
setcookie($cookie_name, $cookie_value,  time()+3600); 
	$cookie_name1 = "pass1616";
$cookie_value1 = $p;
setcookie($cookie_name1, $cookie_value1, time()+3600); 

   
    while($row=mysql_fetch_array($r)){

    	 write_mysql_log($u,$row['id']);
?>
<div class="pdetail">
	
<details>
	

	<td><summary><h3><?php echo $row['fname']; ?>   <?php  echo $row['lname'];?></h3></summary>
		
	<table class="table table-condensed"><tr><td><img src="http://localhost:8080/shopboot/images/settingi.png" class="img-rounded" height="30" width="30"> <p>Accaunt settings</p></td></tr></table>
<form action="index.php">
	<a href="logout.php?hello=true" >
Sign out</a>
</form>
</details>

	</div>
<?php $xx=$row['id'];
echo $xx;?>
<div class="cart">
<a href="http://localhost:8080/shopboot/cart_details.php?id=<?php echo $xx; ?>"><h3><i><b>click here<?php  echo cartp($xx); ?></b></i></h3>
<a href="http://localhost:8080/shopboot/tp.php/?u=<?php echo $row['username'];?>">whats new for me?</a>
	<img src="http://localhost:8080/shopboot/images/cart2.png" class="img-rounded" height="40" width="30" alt="cart"></a>


</div>
	<?php 
		$veri=$row['id'];
		}
} else {
    echo "";
    
}

?>

<div class="left">

<h1>My app</h1>

<?php

echo $veri;

?>
<ul class="nav navbar-nav">
	<li class="list-group-item"><a href="http://localhost:8080/shopboot/index.php/?menu=1" style="">mobile</a></li>
	<li lass="list-group-item"><a href="http://localhost:8080/shopboot/index.php/?menu=2">TV</a></li>

	<li lass="list-group-item"><a href="http://localhost:8080/shopboot/index.php/?menu=3">washing machines</a></li>
	<li lass="list-group-item"><a href="http://localhost:8080/shopboot/index.php/?menu=4">watchs</a></li>
	<li lass="list-group-item"><a href="http://localhost:8080/shopboot/index.php/?menu=5">head phones</a></li>

</ul>
	
</div>
	<div class="product_box">
	<?php
	
	if(!isset($_GET['menu'])){
		
	
$q="SELECT * FROM products ORDER BY rand() LIMIT 0,8";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		?>
		
		<div class="single_product" class="panel panel-default" >
		<a href="product_detail.php/?pid=<?php echo $row['pid']?>&id=<?php echo $veri?>">
		<h2>		<?php
		
		echo $row['name'];
		?>
		
		</h2>
		<br />
		<?php
		echo $row['detail'];
		?>
	<br />

	<br />
		<?php
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-rounded" height="200" width="200"/>';
     $v=$row['pid'];
	
?>
<br>
<br>

</a>
<a href="http://localhost:8080/shopboot/cart.php?cid=<?php echo $veri;?>&pid=<?php echo $v?>"  class="deletebtn">add cart</a>
<h4 id="<?php echo $row['pid']?>"  >ok</h4>
<input type="button" name="button" value="click" onclick="g(<?php echo $row['pid']?>)">
</div>

<?php
	}
	?>
	
</div>	

<?php
}
?>
<?php
}
?>

	
<?php	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		if(isset($_GET['menu'])){
		
	$id1=$_GET['menu'];
$q="SELECT * FROM products where category='$id1'";

$r=mysql_query("$q",$conn);
if($r){
	
	while($row=mysql_fetch_array($r)){
		?>
		
		<div class="single_product">
		<a href="http://localhost:8080/shopboot/product_detail.php/?pid=<?php echo $row['pid']?>&id=<?php echo $veri?>">
		<h2>		<?php
		
		echo $row['name'];
		?>
		
		</h2>
		<br />
		<?php
		echo $row['detail'];
		?>
	<br />

	<br />
		<?php
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-rounded" height="200" width="200"/>';
     
	
?>
</a>
</div>
<?php
	}
	?>
	
</div>
<?php
}
}	
?>
<br>
<div class="footer">
<h4><?php   echo count1(); add1();?>  people have already visited this site</h4>
	
</div>
</div>
</body>
</html>