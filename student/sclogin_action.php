<?php
include('../connection.php');
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$sql = "select * from ascience where email = '$email' and password = '$password'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_affected_rows($conn);
	if ($count > 0) {
		session_start();
		$_SESSION['student'] = "hi";
		header('location: stwelcome.php');	
	}else{
		echo "username and password does not match";
	}

}
?>