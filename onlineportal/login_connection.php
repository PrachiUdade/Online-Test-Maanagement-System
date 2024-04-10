<?php
$servername = "localhost";
$username="root";
$password="";
$database="onlineportal";
$con = mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
	die("Sorry we failed to connect:".mysqli_connect_error());
}
?>