
<?php


 if (isset($_GET['hello'])) {
clearc();
    }
    
  
function clearc(){

	setcookie("user1616", "", time()-3600);
	setcookie("pass1616", "", time()-3600);
}


function write_mysql_log($username, $db)
{

 if($username==''){
  $username='N/A';
 }
 
  
  if( ($remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
    $remote_addr = "REMOTE_ADDR_UNKNOWN";
  }
 echo $remote_addr;
  // Get requested script
  if( ($request_uri = $_SERVER['REQUEST_URI']) == '') {
    $request_uri = "REQUEST_URI_UNKNOWN";
  }
 

$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="INSERT INTO my_log (remote_addr, request_uri, message) VALUES('$remote_addr', '$request_uri','$username')";
 
 



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




}


function count1(){
	$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);
global $co;
if(!$db){
	echo mysql_error();
	
}

$q="select * from counter";
$r=mysql_query("$q",$conn);

if($r){
	while($row=mysql_fetch_array($r)){
	//echo $row['count'];
	$co=$row['number'];
}
}
return $co;
}


add1();
function add1(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="UPDATE `counter` SET number =number+ 1 WHERE `counter`.`count` =1";
if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}


global $co;
function cartp($f){
	
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("shopping", $con);

$cnt = mysql_num_rows(mysql_query("SELECT * FROM cart where cid='$f'"));

return $cnt;

}

?>

// ---------------------------------------------



<?php
 if (isset($_GET['u'])) {

function pr(){
global $i,$c,$t;
	$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);
global $co;
if(!$db){
	echo mysql_error();
	
}


$cars = array("/shopping/index.php", "/shopping/index.php/?menu=1", "/shopping/index.php/?menu=2","/shopping/index.php/?menu=3","/shopping/index.php/?menu=4","/shopping/product_detail.php/?pid=37&id=7");
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
	

$q="SELECT * FROM my_log WHERE request_uri='$cars[$i]' and message='saurabh'";

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
}else{
	$o=$cc[$i+1];
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

echo $k;

return array($k,$o);
}

//print_r(array_values(pr())); 
$rrr=array_values(pr());
echo $rrr[1];

}
?>



















//---------------------------------------------------------------------------------------------------------
<a href="http://localhost:8080/shopboot/index.php">back to previous</a>

<a href="http://localhost:8080/shopboot/login.php">Login page</a>
