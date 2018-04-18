<html>
	<head><title>Buy product</title>
	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	</head>
	<body>
		<div class="container">
	<script type="text/javascript">
	<?php ?>

		 var txt;
var r = confirm("Press a button!");
if (r == true) {
    txt = "You pressed OK!";
    <?php o(); ?>
    
} else {
    txt = "You pressed Cancel!";
} 
	</script>
	
		<?php
		$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
		include 'counter.php';
		$pid=$_GET['pid'];
		$id=$_GET['id'];


$q="SELECT * FROM login WHERE id='$id'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){

write_mysql_log($row['fname'],$row['id']);

}
}


o();
	

		function O(){	
			if(!empty($_GET['id'])){
	

				$pid=$_GET['pid'];
				$id=$_GET['id'];

				$conn=mysql_connect("localhost","root","");
				$db=mysql_select_db('shopping',$conn);

				if(!$db){
					echo mysql_error();
				}
				global $p;
				echo 'sucess';

				$q="select price from products where pid='$pid'";
				$r=mysql_query("$q",$conn);
  
				if($r){
					while($row=mysql_fetch_array($r)){
						$p=$row['price'];
					}
				}
				echo $p;




				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shopping";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if($conn->connect_error){
					echo "Connection failed: " ;
				}


				$sql="Insert into product_status(pid,cid,product_price,status) values('$pid','$id','$p','u')";
 
				if($conn->query($sql) === TRUE){
					?>
<div class="alert alert-success"><h3>your request added successfully</h3></div>
					<?php
					
				} else{
					?>
<div class="alert alert-danger"><h3>Something went wrong please try again</h3></div>
					<?php
					
				}
			}
			else{
				echo 'you have not login';
				?>
				<a href="http://localhost:8080/shopboot/login.php">Back</a>
				<?php
			}

		}
		?>
	
</div>
	</body>
</html>