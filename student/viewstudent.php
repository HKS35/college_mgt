  <div class="container-fluid">
        <h1 style="text-align: center; color: limegreen;">Applying For +2 SCIENCE</h1>
        <?php  include('../connection.php')    ?>
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
               <th>gender</th>
              <th>dob</th>
               <th>religion</th>
              <th>school name</th>
               <th>fullmark</th>
              <th>acquiremark</th>
               <th>faddress</th>
              <th>saddress</th>
              <th colspan="2">action</th>
             
          </tr>
        </thead>
        <tbody>
           <?php  
            include('../connection.php');    
           $sql = "select * from ascience";
           $result = mysqli_query($conn,$sql);
           while($row = mysqli_fetch_assoc($result)){

           ?>
          <tr>
           <td><?php echo $row['id']  ?></td> 
           <td><?php echo $row['afn'] ." ". $row['amn'] ." ". $row['aln'] ?></td>
           <td><?php echo $row['ffn'] . $row['fmn'] . $row['fln'] ?></td>
           <td><?php echo $row['mfn'] . $row['mmn'] . $row['mln'] ?></td>
           <td><?php echo $row['email']  ?></td>
           <td><?php echo $row['mobile_no']  ?></td>
           <td><?php echo $row['catagory']  ?></td>
           <td><?php echo $row['gender']  ?></td>
           <td><?php echo $row['dob']  ?></td>
           <td><?php echo $row['religion']  ?></td>
           <td><?php echo $row['school_name']  ?></td>
           <td><?php echo $row['fmark']  ?></td>
           <td><?php echo $row['amark']  ?></td>
           <td><?php echo $row['faddress']  ?></td>
           <td><?php echo $row['saddress']  ?></td>
           <td> <img src="<?php echo "http://localhost/college/student/".$row['img'];  ?>" width="30px"; ></td>
           <td><a href="edit.php?id=<?php echo $row['id']; ?>">edit</a></td>
           <td><a href="delete'php?id=<?php echo $row['id']; ?>">delete</td>
          </tr>
          <?php
          }
          ?>  
           
            
        </tbody>  
        </table> 
        </div>
       
      </div>