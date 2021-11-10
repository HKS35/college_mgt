<?php  include('C:\xampp\htdocs\COLLEGE\header.php');  ?>
<div style="background-image: url('welcome.jpg'); height: 500px; width: 100%;
background-size: cover;background-repeat: no-repeat;">
	 <div class="card card0 border-0">
	 	<div class="container">
            <div class="col-lg-6">
            	 <div class="row mb-4 px-3">
                        <h2 class="mb-0 mr-4 mt-2">+2 Science Student LOGIN FORM</h2>
                    </div>
                    <form action="sclogin_action.php" method="post">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password"> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="login">Login</button> </div>
                    </form>
	        </div>
	    </div>
	</div>
</div>
</body>
</html>
