<?php if(isset($_POST['submit'])){
        $id = $_POST['id'];
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
include('../connection.php');
$sql = "update student_add set aname = '$aname', fname = '$fname',  mname = '$mname', email = '$email', mobile_no = '$number', catagory = '$catagory',course = '$course', gender = '$gender', dob = '$dob', religion = '$religion', school_name = '$school_name', fmark = '$fmark', amark = '$amark', faddress = '$presentaddress', saddress = '$permanentaddress' , img = '$img_path',sign = '$img_path1',certificate = '$img_path2',marksheet = '$img_path3' where id = '$id' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result) {
                echo "updated successfully";
                header('location:viewstudent.php');
        }else{
                echo "u r not updated successfully";
        }


}
?>