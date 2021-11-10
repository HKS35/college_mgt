<?php
include('../header.php');
?>
<?php 
include('../connection.php');
if(isset($_POST['submit'])){
$afname = $_POST['afn'];
$amname = $_POST['amn'];
$alname = $_POST['aln'];
$affname = $_POST['ffn'];
$afmname = $_POST['fmn'];
$aflname = $_POST['fln'];
$amfname = $_POST['mfn'];
$ammname = $_POST['mmn'];
$amlname = $_POST['mln'];
$email = $_POST['email'];
$number = $_POST['mobile_no'];
$catagory = $_POST['catagory'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$religion = $_POST['religion'];
$school_name = $_POST['school_name'];
$fmark = $_POST['fmark'];
$amark = $_POST['amark'];
$presentaddress = $_POST['faddress'];
$permanentaddress = $_POST['saddress'];
$img = $_FILES['img'];
$img_name = $img['name'];
$tmp_name = $img['tmp_name'];
$img_path = "img/".$img_name;
$success = move_uploaded_file($tmp_name,'img/'.$img_name);
if ($success) {

	echo "img uploadeed success";
}else{
	echo "unsuccess";
}
$sign = $_FILES['sign'];
$img_name1 = $sign['name'];
$tmp_name1 = $sign['tmp_name'];
$img_path1 = "img/".$img_name1;
$success1 = move_uploaded_file($tmp_name1,'img/'.$img_name1);
$password = sha1($_POST['password']);
$cpass = sha1($_POST['cpassword']);
$sql = "insert into ascience (afn,amn,aln,ffn,fmn,fln,mfn,mmn,mln,email,mobile_no,catagory,gender,dob,religion,school_name,fmark,amark,faddress,saddress,img,sign,password)values('$afname','$amname','$alname','$affname','$afmname','$aflname','$amfname','$ammname','$amlname','$email','$number','$catagory','$gender','$dob','$religion','$school_name','$fmark','$amark','$presentaddress','$permanentaddress','$img_path','$img_path1','$password')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
	// header('location:sclogin.php');
echo "sign up success";
}else{
echo "error";
}
}
?>
