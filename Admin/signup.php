<?php
  include('../connection.php');
  if(isset($_POST['signup'])){
  	$user = $_POST['user'];
  	$pass = $_POST['pass'];
  	$cpass = $_POST['cpass'];
  	$email = $_POST['email'];
  	$pin = $_POST['pin'];
  	$sql = "insert into admin (user,email,pass)values('$user','$email','$pass')";
  	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
  	if($result){
  		echo "signup success";
  	}else{
  		echo "signup fauiled";
  	}
  }
?>