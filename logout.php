<!DOCTYPE html>
<html>
<head>

	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
</head>
<body>

<div class="container">
<div class="alert alert-info">
<?php


 if (isset($_GET['hello'])) {
clearc();
    }
    
  
function clearc(){

	setcookie("user1616", "", time()-3600);
	setcookie("pass1616", "", time()-3600);
}
?>
<a href="http://localhost:8080/shopboot/index.php">back to previous</a>
<br>

<a href="http://localhost:8080/shopboot/login.php">Login page</a>
</div>
</div>
</body>
</html>