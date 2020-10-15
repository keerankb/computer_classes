<?php

// $con = mysqli_connect('localhost','root','','futurecomputer');
// if($con){
// 	echo"connection Successful";
// }else{
// 	 echo" not connected ";
// }
/*

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$course = $_POST['course'];
$message = $_POST['message'];



//if (isset($_POST['Save']))

$sql= "INSERT INTO  `contactus` (`name` ,`email` ,`number` ,`course`,`message`)VALUES('$name','$email','$number','$course','$message')";
$result=mysqli_query($con,$sql);   


if($rs)
{
	echo "Record Inserted";
}
*/




$servername = "localhost";
$username = "root";
$password = " ";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";





?>
	
