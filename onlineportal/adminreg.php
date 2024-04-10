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
	echo "connection failed" .mysqli.error();
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact = $_POST['num'] ;
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['password2'];

$query= " INSERT INTO adminregs VALUES('','$firstname','$lastname','$dateofbirth','$email','$gender','$address','$contact','$username','$password','$confirmpassword')";
$data = mysqli_query($con,$query);
if($data)
{
  header("location:adminlogin1.php");
}
else
{
	echo "data is not send";
}
?>