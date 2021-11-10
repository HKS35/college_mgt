<?php
session_start();
if (isset($_SESSION['name'])) {
	header('location:dashboard.php');
}
include('../connection.php');
if (isset($_POST['login'])) {
	$user = $_POST['user'];
  	$pass = $_POST['pass'];
  	$sql = "select * from admin where user = '$user' and pass = '$pass'";
  	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
  	 echo $count =mysqli_affected_rows($conn);

  	if ($count > 0) {
  		session_start();
       $_SESSION['name'] = "hello";
  		header('location: dashboard.php');

  	}else{
  		echo "<script>alert('user and password does not match'); </script>";
        
  	}
	
}


?>