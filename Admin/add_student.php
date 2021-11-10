<?php include('C:\xampp\htdocs\COLLEGE\Admin\navbar.php'); ?>

<form enctype="multipart/form-data" method="post" action="add_student_action.php">
			<div class="container">
				<div class="row">					
					<div class="col-md-6">
					<div class="form-group">						
						<label>Applicant  name:*</label>
						<input type="text" name="aname" class="form-control"  placeholder="Enter Applicant Name..." required>
						</div>
						<div class="form-group">
						<label>Father  name:*</label>
						<input type="text" name="fname" class="form-control"  placeholder="Enter Applicant Fathers Name..." required>
						</div>			
						<div class="form-group">		
						<label>Mother  name:*</label>
						<input type="text" name="mname" class="form-control"  placeholder="Enter Applicant Mothers Name..." required>
						</div>
						<div class="form-group">
							<label>Gender:*</label>
							<select class="form-control" name="gender" required>
								<option disabled selected="">Gender</option>
								<option>Male</option>
								<option>Female</option>
								<option>Other</option>
							</select>
						</div>
						<div class="form-group">
							<label>Social Catagory:*</label>
							<select class="form-control" name="catagory" required>
								<option disabled selected="">Catagory</option>
								<option>SC</option>
								<option>ST</option>
								<option>OBC</option>
								<option>General</option>
							</select>
						</div>
						<div class="form-group">
							<label>Applying For Course</label>
							<select class="form-control" name="course" required>
								<option disabled selected="">choose ur course</option>
								<option>+2Science</option>
								<option>+2Commerse</option>
								<option>+2Arts</option>
								<option>+3Science</option>
								<option>+3Commerse</option>
								<option>+3Arts</option>
								
							</select>
						</div>
						<div class="form-group">
							<label for="date of birth">Date of Birthday:*</label>
							<input type="date" id="dob" name="dob">
					</div>
					</div>	
					
					
					
					<div class="col-md-6">
						<div class="form-group">
							<label>Applicant Email:*</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your Valid Email..">
						</div>
					
					
						<div class="form-group">
							<label> Mobile no:*</label>
							<input type="number" name="mobile_no" class="form-control" placeholder="Enter your number" required>
						</div>
					    <div class="form-group">
							<label>nationality:*</label>
							<select class="form-control" name="religion" required>
								<option disabled selected="">religion</option>
								<option>hindu</option>
								<option>muslim</option>
								<option>christian</option>
							</select>
					    </div>
						<div class="form-group">
							<label>10th school name:*</label>
							<input type="text" name="school_name" class="form-control"  placeholder="Enter your 10th school name" required>
						</div>
					
					
						<div class="form-group">
							<label>10th full mark:*</label>
							<input type="number" name="fmark" class="form-control"  placeholder="Enter your 10th full mark" required>
						</div>
						<div class="form-group">
							<label>10th acquire mark:*</label>
							<input type="number" name="amark" class="form-control"  placeholder="Enter your 10th acquire mark" required>
						</div>
					</div>
					<div class="col-md-6">
					     <div class="form-group">
							<label>pressent address: </label>
							<textarea name="faddress" class="form-control" rows="4"></textarea>
						</div>
						<div class="form-group">
							<label>upload image: </label>
							<input type="file" name="img"><br>
						</div>
					
					</div>	
					<div class="col-md-6">
					    <div class="form-group">
							<label>permanent address: </label>
							<textarea name="saddress" class="form-control" rows="4"></textarea>
						</div>
						<div class="form-group">
							<label>upload your signature: </label>
							<input type="file" name="sign"><br>
						</div>
				
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>upload your 10th certificate: </label>
							<input type="file" name="certificate"><br>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>upload your 10th marksheet: </label>
							<input type="file" name="marksheet"><br>
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
					
						
						
				
					
						
					
						
					
					
						
					
					
					
						
					
					
						
					
					
						
					
					
						
				
				
					
			
			