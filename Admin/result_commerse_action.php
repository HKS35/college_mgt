	<?php 
include('../connection.php');
if(isset($_POST['submit'])){
	$roll_no = $_POST['roll_no'];
	$odia = $_POST['odia'];
	$english = $_POST['english'];
	$math = $_POST['math'];
	$tally = $_POST['tally'];
	$business = $_POST['business'];
	$company = $_POST['company'];
	$accounting = $_POST['accounting'];
	$sql = "insert into commerse (roll_no,odia,english,mathematics,tally,business,company,accounting)values('$roll_no','$odia','$english','$math','$tally','$business','$company','$accounting')";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if ($result) {
		    
		echo "result added successfully";
			}else{
				echo "result adding not successfull";
			}

}
?>