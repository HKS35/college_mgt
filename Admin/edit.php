
<?php include('C:\xampp\htdocs\COLLEGE\Admin\navbar.php'); ?>
  <?php include('../connection.php');  ?>
      <?php
           if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from student_add where id = $id";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
           }
      ?>

<form enctype="multipart/form-data" method="post" action="edit_action.php">
      <div class="container">
        <div class="row">         
          <div class="col-md-6">
            <div class="form-group">            
            <label>ID:*</label>
            <input type="number" name="id" class="form-control" value="<?php  echo $row['id'];  ?>">
            </div>
          <div class="form-group">            
            <label>Applicant  name:*</label>
            <input type="text" name="aname" class="form-control" value="<?php  echo $row['aname'];  ?>">
            </div>
            <div class="form-group">
            <label>Father  name:*</label>
            <input type="text" name="fname" class="form-control" value="<?php  echo $row['fname'];  ?>">
            </div>      
            <div class="form-group">    
            <label>Mother  name:*</label>
            <input type="text" name="mname" class="form-control"  value="<?php  echo $row['mname'];  ?>">
            </div>
            <div class="form-group">
              <label>Gender:*</label>
              <select class="form-control" name="gender" required>
               
                <option value="Male" <?php if ($row['gender'] == 'Male') {
                   echo 'selecgted';
                } ?>>Male</option>
                <option value="Female" <?php if ($row['gender'] == 'Female') {
                   echo 'selecgted';  } ?>>Female</option>
                <option value="Other" <?php if ($row['gender'] == 'Other') {
                   echo 'selecgted';  } ?>>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label>Social Catagory:*</label>
              <select class="form-control" name="catagory"  required>
               
                <option value="SC" <?php if ($row['catagory'] == 'SC') {
                   echo 'selected';  } ?>>SC</option>
                <option value="ST" <?php if ($row['catagory'] == 'ST') {
                   echo 'selected';  } ?>>ST</option>
                <option value="OBC" <?php if ($row['catagory'] == 'OBC') {
                   echo 'selected';  } ?>>OBC</option>
                <option value="General" <?php if ($row['catagory'] == 'General') {
                   echo 'selected';  } ?>>General</option>
              </select>
            </div>
            <div class="form-group">
              <label>Applying For Course</label>
              <select class="form-control" name="course" value="<?php  echo $row['course'];  ?>" required>
               
                <option value="+2Science" <?php if ($row['course'] == '+2Science') {
                   echo 'selected';  } ?>>+2Science</option>
                <option value="+2Commerse" <?php if ($row['course'] == '+2Commerse') {
                   echo 'selected';  } ?>>+2Commerse</option>
                <option value="+2Arts" <?php if ($row['course'] == '+2Arts') {
                   echo 'selected';  } ?>>+2Arts</option>
                <option value="+3Science" <?php if ($row['course'] == '+3Science') {
                   echo 'selected';  } ?>>+3Science</option>
                <option value="+3Commerse" <?php if ($row['course'] == '+3Commerse') {
                   echo 'selected';  } ?>>+3Commerse</option>
                <option value="+3Arts" <?php if ($row['course'] == '+3Arts') {
                   echo 'selected';  } ?>>+3Arts</option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="date of birth">Date of Birthday:*</label>
              <input type="date" id="dob" name="dob" value="<?php  echo $row['dob'];  ?>">
          </div>
          </div>  
          
          
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Applicant Email:*</label>
              <input type="email" name="email" class="form-control" value="<?php  echo $row['email'];  ?>">
            </div>
          
          
            <div class="form-group">
              <label> Mobile no:*</label>
              <input type="number" name="mobile_no" class="form-control" value="<?php  echo $row['mobile_no'];  ?>">
            </div>
              <div class="form-group">
              <label>nationality:*</label>
              <select class="form-control" name="religion" required>
               
                <option value="hindu" <?php if ($row['religion'] == 'hindu') {
                   echo 'selected';  } ?>>hindu</option>
                <option value="muslim" <?php if ($row['religion'] == 'muslim') {
                   echo 'selected';  } ?>>muslim</option>
                <option value="christian" <?php if ($row['religion'] == 'christian') {
                   echo 'selected';  } ?>>christian</option>
              </select>
              </div>
            <div class="form-group">
              <label>10th school name:*</label>
              <input type="text" name="school_name" class="form-control"  value="<?php  echo $row['school_name'];  ?>" required>
            </div>
          
          
            <div class="form-group">
              <label>10th full mark:*</label>
              <input type="number" name="fmark" class="form-control" value="<?php  echo $row['fmark'];  ?>" required>
            </div>
            <div class="form-group">
              <label>10th acquire mark:*</label>
              <input type="number" name="amark" class="form-control"  value="<?php  echo $row['amark'];  ?>" required>
            </div>
          </div>
          <div class="col-md-6">
               <div class="form-group">
              <label>pressent address: </label>
              <textarea name="faddress" class="form-control" rows="4" ><?php  echo $row['faddress'];  ?></textarea>
            </div>
            <div class="form-group">
              <label>upload image: </label>
              <input type="file" name="img"><p><?php  echo $row['img'];  ?></p>
              <br>
            </div>
          
          </div>  
          <div class="col-md-6">
              <div class="form-group">
              <label>permanent address: </label>
              <textarea name="saddress" class="form-control" rows="4" ><?php  echo $row['saddress'];  ?></textarea>
            </div>
            <div class="form-group">
              <label>upload your signature: </label>
              <input type="file" name="sign"><p><?php  echo $row['sign'];  ?></p><br>
            </div>
        
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>upload your 10th certificate: </label>
              <input type="file" name="certificate"><p><?php  echo $row['certificate'];  ?></p><br>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>upload your 10th marksheet: </label>
              <input type="file" name="marksheet"><p><?php  echo $row['marksheet'];  ?></p><br>
            </div>
          </div>
          
        <div class="col-md-12 text-center">
          
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success btn-lg mt-4">SUBMIT</button>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>   
          
            
            
        
          
            
          
            
          
          
            
          
          
          
            
          
          
            
          
          
            
          
          
            
        
        
          
      
      

        
      