<form action="#" method="post">
	<input type="text" name="username">
	<input type="password" name="password">
	<button type="submit" value="submit" name="submit">Log In</button>
</form>


<?php 
	
// 	if(isset($_POST['submit'])) {

// 	$con = mysqli_connect("localhost","root","","future_comp") or die('Unable To connect');
	
// 	$result = mysqli_query($con,"INSERT INTO admin_login WHERE username='" . $_POST["username"] . "' and password= '". $_POST["password"]."'");
// 	}

// 	if (mysqli_connect($con, $result)) {
//     echo"connect";
//    	//header ("Refresh: 0; index.php");
// 	}else {
//     echo "Error: ". $query . "<br>" . mysqli_error($con);
// }
$con = mysqli_connect("localhost","root","","future_comp") or die('Unable To connect');

if (isset($_POST['submit'])) {

	$username = $_POST['username'];

	$password = $_POST['password'];



	$query ="INSERT INTO `admin_login`(`username`,`password`) VALUES ('$username','$password')";

	if (mysqli_query($con, $query)) {
		echo "<script>alert('added'); </script>";
		header("Refresh: 0; sample.php");
	}else {
     echo "Error: ". $query . "<br>" . mysqli_error($con);
}
}



?>


