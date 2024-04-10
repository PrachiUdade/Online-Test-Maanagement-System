<?php
//error_reporting(0);
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
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];

$query=  "INSERT INTO question VALUES('','$question','$option1','$option2');
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