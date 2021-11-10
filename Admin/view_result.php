<?php include('C:\xampp\htdocs\COLLEGE\Admin\navbar.php'); ?>
 <div class="container-fluid">
        <h1 style="text-align: center; color: limegreen;">View Result</h1>
        <?php  include('../connection.php');    ?>
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
              <th>Stream</th>
              <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        	 
             <?php  
               
           $sql = "select id from student_add";
           $result = mysqli_query($conn,$sql);
           $row = mysqli_fetch_assoc($result)

           ?>
        	<tr>
        		<td>+2Science</td>
            <td><a href="http://localhost/college/admin/innerjoin_science.php">view</a></td>
          </tr>
            <tr>
            <td>+2Commerse</td>
            <td><a href="http://localhost/college/admin/innerjoin_commerse.php">view</a></td>
          </tr>
            <tr>
            <td>+2Arts</td>
            <td><a href="http://localhost/college/admin/innerjoin_arts.php">view</a></td>
          </tr>  
        </tbody>
        </table>
        </div>
        </div>       