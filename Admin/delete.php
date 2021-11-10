<?php
 include('../connection.php');
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from student_add where id = $id";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($result){
        header('location: viewstudent.php');
    }
 }

?>