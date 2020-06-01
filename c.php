<?php
include_once 'database/dbconfig.php';
if(isset($_POST['save']))
{	 
	$username = $_POST['username'];
    $email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password); 
    $cpassword = $_POST['cpassword'];
	 $sql = "INSERT INTO register (username,email,password,cpassword)
	 VALUES ('$username','$email','$password','$cpassword')";
	 if (mysqli_query($connection, $sql)) {
		// echo "New record created successfully !";
		header('Location : login.php');
	 } else {header('Location : r.php');
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}
?>