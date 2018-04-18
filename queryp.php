<?php


if(isset($_GET['pid'])){
$conn=mysqli_connect("localhost","root","","shopping");
$h=$_GET['pid'];
//echo $h;

if(!$conn)
{
	echo mysqli_connect_errot();

}

//echo "connected"."\n";


$sql="UPDATE `shopping`.`products` SET number=number+1 WHERE `products`.`pid` =$h";

if(mysqli_query($conn,$sql)){

	$conn=mysqli_connect("localhost","root","","shopping");

if(!$conn)
{
	echo mysqli_connect_errot();

}

//echo "connected"."\n";



$sql="select * from products where pid=$h";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
 echo	$row['number'];
}

}else{
	echo 'fail';
}


}




function o($h){
	$conn=mysqli_connect("localhost","root","","shopping");

if(!$conn)
{
	echo mysqli_connect_errot();

}

//echo "connected"."\n";



$sql="select * from products where pid=$h";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
 echo	$row['number'];
}
}

?>
