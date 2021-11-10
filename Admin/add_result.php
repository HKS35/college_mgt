<?php include('C:\xampp\htdocs\COLLEGE\Admin\navbar.php'); ?>

<div class="container-fluid">
        <h1 style="text-align: center; color: limegreen;">Add Result</h1>
       
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
              <th>Roll No</th>
              <th>Student Name</th>
              <th>Stream</th>
              <th colspan="2">Action</th>
           
          </tr>
         </thead>
          
    <tbody>
        <?php  
            include('../connection.php');    
           $sql = "select id,aname,course from student_add";
           $result = mysqli_query($conn,$sql) or die(mysql_error($conn));
           while($row = mysqli_fetch_assoc($result)){

           ?>

    	<tr>

    		<td><?php echo $row['id'];  ?></td> 
           <td><?php echo $row['aname'];  ?></td>
           <td><?php echo $row['course'];  ?></td>
            <?php if($row['course'] == "+2Science"){ ?>
           <td><a href="add_result_science.php?id=<?php echo $row['id']; ?> ">add result</a></td>
            <?php }elseif($row['course'] == "+2Commerse"){ ?>
           <td><a href="add_result_commerse.php?id=<?php echo $row['id']; ?> ">add result</a></td>
         <?php }elseif($row['course'] == "+2Arts"){ ?> 
           <td><a href="add_result_arts.php?id=<?php echo $row['id']; ?> ">add result</a></td>
          <?php } ?>
            
    	</tr>
      <?php } ?>
    </tbody>
    
   </table>
 </div>
</div>