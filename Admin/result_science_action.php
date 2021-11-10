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
	$sql = "insert into science (roll_no,odia,english,math,physics,chemistry,botany,zoology)values('$roll_no','$odia','$english','$math','$physics','$chemistry','$botany','$zoology')";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if ($result) {
		header('location:innerjoin_science.php');
		echo "result added successfully";
			}else{
				echo "result adding not successfull";
			}

}
?>