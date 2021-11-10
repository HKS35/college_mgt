	<?php 
include('../connection.php');
if(isset($_POST['submit'])){
	$roll_no = $_POST['roll_no'];
	$odia = $_POST['odia'];
	$english = $_POST['english'];
	$ps = $_POST['pscience'];
	$history = $_POST['history'];
	$geography = $_POST['geography'];
	$sanskrit = $_POST['sanskrit'];
	$hindi = $_POST['hindi'];
	$sql = "insert into arts (roll_no,odia,english,pscience,history,geography,sanskrit,hindi)values('$roll_no','$odia','$english','$ps','$history','$geography','$sanskrit','$hindi')";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if ($result) {
		
		echo "result added successfully";
			}else{
				echo "result adding not successfull";
			}
}

?>