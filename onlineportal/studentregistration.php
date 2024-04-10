<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="onlineportal";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {

	die("Sorry we failed:".mysqli_connect_error());
}


if($con)
{
	echo "connection ok";
}
else
{
	echo "connection failed".mysqli.error();
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$qualification = $_POST['subject'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['num'] ;
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['password2'];

$query= "Insert INTO studentreg VALUES('','$firstname','$lastname','$dateofbirth','$qualification','$gender','$email','$address','$contact','$username','$password','$confirmpassword')";
$data = mysqli_query($con,$query);
if($data)
{
  header("location:studentlogin1.php");

} 
else
{
	echo "data is not send";
}

?>
