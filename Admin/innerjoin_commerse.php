<?php include('C:\xampp\htdocs\COLLEGE\Admin\navbar.php'); ?>


  <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
              <th>id</th>
              <th>applicant name</th>
              <th>father name</th>
              <th>mother name</th>
              <th>email</th>
              <th>mobile no</th>
              <th>catagory</th>
              
              <th>course</th>
                <th>gender</th>
              <th>dob</th>
               <th>religion</th>
              <th>school name</th>
               <th>fullmark</th>
              <th>acquiremark</th>
               <th>faddress</th>
              <th>saddress</th>
              <th>image</th>
              <th>signature</th>
              <th>certificate</th>
              <th>marksheet</th>
               <th>roll no</th>
               <th>odia</th>
              <th>english</th>
               <th>math</th>
              <th>tally</th>
              <th>business</th>
              <th>company</th>
              <th>accounting</th>
              <th>full mark</th> 
              <th colspan="2">action</th>
             
          </tr>
        </thead>
        <tbody>
          <?php   include('../connection.php'); 
$sql = "select * from student_add inner join commerse on student_add.id = commerse.roll_no";
$result = mysqli_query($conn,$sql) or mysqli_error($conn);
 while($row = mysqli_fetch_assoc($result)){
?>
          <tr>
           <td><?php echo $row['id'];  ?></td> 
           <td><?php echo $row['aname'];  ?></td>
           <td><?php echo $row['fname']; ?></td>
           <td><?php echo $row['mname'];  ?></td>
           <td><?php echo $row['email'];  ?></td>
           <td><?php echo $row['mobile_no'];  ?></td>
           <td><?php echo $row['catagory'];  ?></td>
           <td><?php echo $row['gender'];  ?></td>
            <td><?php echo $row['course'];  ?></td>
           <td><?php echo $row['dob'];  ?></td>
           <td><?php echo $row['religion'];  ?></td>
           <td><?php echo $row['school_name'];  ?></td>
           <td><?php echo $row['fmark'];  ?></td>
           <td><?php echo $row['amark'];  ?></td>
           <td><?php echo $row['faddress'];  ?></td>
           <td><?php echo $row['saddress'];  ?></td>
            <td> <img src="<?php echo "http://localhost/college/Admin/".$row['img'];  ?>" width="30px"; ></td>
            <td> <img src="<?php echo "http://localhost/college/Admin/".$row['sign'];  ?>" width="30px"; ></td>
             <td> <img src="<?php echo "http://localhost/college/Admin/".$row['certificate'];  ?>" width="30px"; ></td>
              <td> <img src="<?php echo "http://localhost/college/Admin/".$row['marksheet'];  ?>" width="30px"; ></td>
               <td><?php echo $row['roll_no'];  ?></td>
           <td><?php echo $row['odia'];  ?></td>
           <td><?php echo $row['english'];  ?></td>
           <td><?php echo $row['math'];  ?></td>
           <td><?php echo $row['tally'];  ?></td>
           <td><?php echo $row['business'];  ?></td>
           <td><?php echo $row['company'];  ?></td>
           <td><?php echo $row['accounting'];  ?></td>
            <td><?php echo $row['full_mark'];  ?></td>
           <td><a href="edit.php?id=<?php echo $row['id']; ?>">edit</a></td>
           <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</td>
          </tr>
          <?php
          }
          ?>  
           
            
        </tbody>  
        </table> 
        </div>
       
      </div>
      