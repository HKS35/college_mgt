<?php 

 include('C:\xampp\htdocs\COLLEGE\header.php'); ?>
		<div class="title" style="text-align: center; background-color: blueviolet; height: 50px; color:white;">
			<h1>Online Registration Form For +2 Science</h1>
		</div>
		
		<form enctype="multipart/form-data" method="post" action="screg_action.php">
			<div class="container">
				<div class="row">					
					<div class="col-md-4">						
						<label>Applicant First name:*</label>
						<input type="text" name="afn" class="form-control"  placeholder="Enter your first name..." required>
						<label>Father First name:*</label>
						<input type="text" name="ffn" class="form-control"  placeholder="Enter your fathers first name..." required>						
						<label>Mother First name:*</label>
						<input type="text" name="mfn" class="form-control"  placeholder="Enter your mothers first name..." required>
					</div>
					<div class="col-md-4">
						
						<label>Applicant middle name:*</label>
						<input type="text" name="amn" class="form-control"  placeholder="Enter your middle name..." required>
						<label>Father middle name:*</label>
						<input type="text" name="fmn" class="form-control"  placeholder="Enter your fathers middle name..." required>						
						<label>Mother middle name:*</label>
						<input type="text" name="mmn" class="form-control"  placeholder="Enter your mothers middle name..." required>
					</div>
					<div class="col-md-4">
						
						<label>Applicant last name:*</label>
						<input type="text" name="aln" class="form-control"  placeholder="Enter your first name..." required>
						<label>Father last name:*</label>
						<input type="text" name="fln" class="form-control"  placeholder="Enter your fathers first name..." required>
						
						<label>Mother last name:*</label>
						<input type="text" name="mln" class="form-control"  placeholder="Enter your mothers first name..." required>
					</div>					
					<div class="col-md-3">
						<div class="form-group">
							<label>Applicant Email:*</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your Valid Email..">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label> Mobile no:*</label>
							<input type="number" name="mobile_no" class="form-control" placeholder="Enter your number" required>
						</div>
					</div>
					<div class="col-md-3">
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
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Gender:*</label>
							<select class="form-control" name="gender" required>
								<option disabled selected="">Gender</option>
								<option>Male</option>
								<option>Female</option>
								<option>Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="date of birth">Date of Birthday:</label>
							<input type="date" id="dob" name="dob">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>nationality:*</label>
							<select class="form-control" name="religion" required>
								<option disabled selected="">religion</option>
								<option>hindu</option>
								<option>muslim</option>
								<option>christian</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>10th school name:*</label>
							<input type="text" name="school_name" class="form-control"  placeholder="Enter your 10th school name" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>10th full mark:*</label>
							<input type="number" name="fmark" class="form-control"  placeholder="Enter your 10th full mark" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>10th acquire mark:*</label>
							<input type="number" name="amark" class="form-control"  placeholder="Enter your 10th acquire mark" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>pressent address: </label>
							<textarea name="faddress" class="form-control" rows="4"></textarea>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
							<label>permanent address: </label>
							<textarea name="saddress" class="form-control" rows="4"></textarea>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>upload image: </label>
							<input type="file" name="img"><br>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label>upload your signature: </label>
							<input type="file" name="sign"><br>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						<lable> password:</label>
						<input type="password" name="password" class="form-control" placeholder="please create ur password">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					<lable>confirm  password:</label>
					<input type="password" name="cpassword" class="form-control" placeholder="please enter confirm password">
				</div>
			</div>
			
			
			<div class="text-center">
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success btn-lg mt-4">SUBMIT</button>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>