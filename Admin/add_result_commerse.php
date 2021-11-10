<?php include('C:\xampp\htdocs\COLLEGE\Admin\navbar.php'); ?>

 <?php include('../connection.php');  ?>
      <?php
           if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select id,aname,course from student_add where id = $id";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
           } ?>
 <h1 style="text-align: center; color: limegreen;">Result input form</h1>
       <form method="post" action="result_commerse_action.php" style="background-color:skyblue;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
				<label><b>Name:-</b></label>
				<input type="text" name="name" class="form-control" value="<?php echo $row['aname']; ?>">
				</div>
				<div class="form-group">
				<label><b>course :</b></label>
				<input type="text" name="course" class="form-control" value="<?php echo $row['course'] ?>">
			</div>
			<div class="form-group">
				<label><b>Tally :-</b></label>
				<input type="number" name="tally" class="form-control" placeholder="Enter Result.." required="">
			</div>
			<div class="form-group">
				<label><b>Mathematics :-</b></label>
				<input type="number" name="math" class="form-control" placeholder="Enter Result.." required="">
			</div>
			<div class="form-group">
				<label><b>Business:-</b></label>
				<input type="number" name="business" class="form-control" placeholder="Enter Result.." required="">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label><b>Roll no/University no :-</b></label>
				<input type="number" name="roll_no" class="form-control" value="<?php echo $row['id']; ?>">
			</div>
			<div class="form-group">
				<label><b>Odia :</b></label>
				<input type="number" name="odia" class="form-control" placeholder="Enter Result.." required="">
			</div>
			
			<div class="form-group">
				<label><b>English :-</b></label>
				<input type="number" name="english" class="form-control" placeholder="Enter Result.." required="">
			</div>
			<div class="form-group">
				<label><b>company:-</b></label>
				<input type="number" name="company" class="form-control" placeholder="Enter Result.." required="">
			</div>
			<div class="form-group">
				<label><b>Accunting:-</b></label>
				<input type="number" name="accounting" class="form-control" placeholder="Enter Result.." required="">
			
		</div>
		
		</div>
		<div class="col-md-12 text-center">
			    
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success btn-lg mt-4">SUBMIT</button>
				</div>
			</div>
	</div>
</form>