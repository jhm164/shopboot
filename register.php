<html>
<head><title>Register</title>

	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	
	
	table{
	
		
	}
	
	td{
		padding:8px;
	border:solid 1px white;
		color: black;
	}
	h1{
		
		color:black;
	}
	input[type=submit]{
		width:120px;
		height:40px;
	}
	input[type=reset]{
		width:120px;
		height:40px;
	}
	
</style>

</head>
<body bgcolor="#4e2552">
<div class="container">
<h1 style="text-shadow: 2px 1px; color: blue;">Registeration form</h1>
<div class="table-responsive">
<table class="table table-striped">

<form action="http://localhost:8080/shopboot/action_page.php" method="post">
<tr> <div class="form-group">
	<td>Enter full name</td>
	<td><input type="text" name="fname" placeholder="first name" class="form-control"/> <input type="text" name="mname" placeholder="middle name"/> <input type="text" name="lname" placeholder="last name"/></td>
	</div>
	
</tr>
<tr>
	<td>Enter gmail</td>
	<td><input type="text" name="gmail" placeholder="@gmail.com"/></td>
</tr>
<tr>
	<td>Enter Contact</td>
	<td><input type="tel" name="cont" placeholder="+91"/></td>
</tr>
<tr>
	<td>Select Gender</td>
	<td><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
</td>
</tr>
<tr>
	<td>Enter DOB</td>
	<td><input type="date" name="date" placeholder="+91"/></td>
</tr>
<tr>
	<td>Enter your address</td>
	<td><input type="text" name="address" placeholder="add"/></td>
</tr>
<tr>
	<td>Enter pin code</td>
	<td><input type="text" name="pin" placeholder="pin"/></td>
</tr>
<tr>
	<td>Enter Username</td>
	<td><input type="text" name="username" placeholder="username"/></td>
</tr>
<tr>
	<td>Enter password</td>
	<td><input type="password" data-toggle="tooltip" title="please enter strong password"  name="password" /></td>
</tr>
<tr>
	<td><input type="reset"  class="btn-primary" value="reset" /></td>
	<td><input type="submit" class="btn-success" value="submit"/></td>
</tr>
</form>


<?php

?>
</table>
</div>
</div>
</body>

</html>