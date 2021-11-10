<?php 
include('../connection.php');
if(isset($_POST['submit'])){
$aname = $_POST['aname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$email = $_POST['email'];
$number = $_POST['mobile_no'];
$catagory = $_POST['catagory'];
$course = $_POST['course'];
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
$sign = $_FILES['sign'];
$img_name1 = $sign['name'];
$tmp_name1 = $sign['tmp_name'];
$img_path1 = "img/".$img_name1;
$success1 = move_uploaded_file($tmp_name1,'img/'.$img_name1);
$certificate = $_FILES['certificate'];
$img_name2 = $certificate['name'];
$tmp_name2 = $certificate['tmp_name'];
$img_path2 = "img/".$img_name2;
$success2 = move_uploaded_file($tmp_name2,'img/'.$img_name2);
$marksheet = $_FILES['marksheet'];
$img_name3 = $marksheet['name'];
$tmp_name3 = $marksheet['tmp_name'];
$img_path3 = "img/".$img_name3;
$success3 = move_uploaded_file($tmp_name3,'img/'.$img_name3);
$sql = "insert into student_add (aname,fname,mname,email,mobile_no,catagory,course,gender,dob,religion,school_name,fmark,amark,faddress,saddress,img,sign,certificate,marksheet)values('$aname','$fname','$mname','$email','$number','$catagory','$course','$gender','$dob','$religion','$school_name','$fmark','$amark','$presentaddress','$permanentaddress','$img_path','$img_path1','$img_path2','$img_path3')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
	// header('location:sclogin.php');
echo "sign up success";
header('location:viewstudent.php');
}else{
echo "error";
}
}
?>
