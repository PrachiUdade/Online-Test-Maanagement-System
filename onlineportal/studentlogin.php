<?php
error_reporting(0);
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
$username = $_POST['username'];
$password = $_POST['password'];

$query= "SELECT * FROM studentreg WHERE username = '$username' && password = '$password'";
$data = mysqli_query($con,$query);
$count = mysqli_num_rows($data);
if($count>0)
{ 
  echo "you can go";
}
else
{
	echo '<script>alert("invalid credentials")</script>';
}
?>