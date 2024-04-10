<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="onlineportal";
$con = mysqli_connect($servername,$username,$password,$dbname);
if($con)
{
	echo "connection ok";
}
else
{
	echo "connection failed".mysqli.error();
}
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query= " Insert INTO contact us VALUES('','$name','$email','$comment')";
$data = mysqli_query($con,$query);
if($data)
{ 
  echo"data is send";
}
else
{
	echo "data is not send";
}
?>