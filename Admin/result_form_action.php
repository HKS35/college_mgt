<?php 
include('../connection.php');
if(isset($_POST['submit'])){
	$roll_no = $_POST['roll_no'];
	$odia = $_POST['odia'];
	$english = $_POST['english'];
	$math = $_POST['math'];
	$physics = $_POST['physics'];
	$chemistry = $_POST['chemistry'];
	$botany = $_POST['botany'];
	$zoology = $_POST['zoology'];
	$sql = "insert into student_result (odia,english,math,physics,chemistry,botany,zoology,f_key)values('$odia','$english','$math','$physics','$chemistry','$botany','$zoology','$roll_no')";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if ($result) {
		header('location:innerjoin.php');
		echo "result added successfully";
			}else{
				echo "result adding not successfull";
			}

}
?>