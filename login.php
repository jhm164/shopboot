<html>
<head><title>Login page</title>


	 <link rel="stylesheet" href="http://localhost:8080/bootstrap/css/bootstrap.min.css">
	<script src="http://localhost:8080/bootstrap/js/bootstrap.min.js" ></script>
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	
	
	
	td{
		color:white;
		
		border: #970000;
		font-size:15px;
		padding: 8px;
		
	}

	b{
		color:black;
	}
</style>
 
	
	<script src="http://localhost:8080/jaquery/jquery-3.2.1.min.js"></script>

<script>

$(document).ready(function(){
    $("#info").click(function(){
        $.ajax({url: "http://localhost:8080/clickepic/info/aboutus.txt", success: function(result){
            $("#here").html(result);
        }});
    });
     $("#l").click(function(){
        $.ajax({url: "http://localhost:8080/clickepic/info/events.txt", success: function(result){
            $("#div1").html(result);
        }});
    });
});




</script>
<script type="text/javascript">
	var attempt = 3; 
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if (username == "" && password == ""){
alert ("cant empty");
return true;
}

}

</script>
</head>
<body bgcolor="#828580">
<div class="container">
	 <div class="login-header">
	<div class="row">
		<div class="col-md-12">
   <center><h1>Login</h1></center></div>
  </div>
	<div class="panel panel-default">
<center><h3 id="info">About us</h3></center>
<div class="all">
	<div class="tab">
<form action="index.php" method="post">
   <div class="form-group">
 <center><label>username</label></center>
	<center><input type="text" placeholder="username" name="username" class="form-control"/></center></div>
	  <div class="form-group">
	<center> <label>password</label></center>
	<center><input type="password" placeholder="password" name="password" /></center></div>
  <div class="form-group">
	<center><input type="submit" value="Login" class="btn-success"  onclick="validate()" style="height: 45px; width:100px;  box-shadow: 4px 4px 0px 4px #595959; font-size: 18px;" /></center>
<center>	<a href="http://localhost:8080/shopboot/register.php">Sign up</a></center>
</div>
</form>
</div>
</div>
<div id="here"></div>
</div>
</div>
</div>
</body>
</html>