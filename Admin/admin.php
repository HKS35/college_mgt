<?php include('C:\xampp\htdocs\COLLEGE\header.php'); ?>
<head>
	<link rel="stylesheet" type="text/css" href="../login.css">
</head>
	<div class="container-fluid">
	<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-space">
                        <div class="login">
                        	<form method="post" action="login.php">
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" name="user" type="text" class="input" placeholder="Enter your username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name="pass" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                            <div class="group"><input type="submit" class="button" name="login" value="Log In"> 
                            </div>
                            <div class="hr"></div>
                            <div class="foot"> <a href="#">Forgot Password?</a> </div>
                            </form>
                        </div>
                        <div class="sign-up-form">
                        	<form method="post" action="signup.php">
                            <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" class="input" name="user" placeholder="Create your Username"> </div>
                            <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" name="pass" data-type="password" placeholder="Create your password"> </div>
                            <div class="group"> <label for="cpass" class="label">Repeat Password</label> <input id="cpass" type="password" name="cpass" class="input" data-type="password" placeholder="Repeat your password"> </div>
                            <div class="group"> <label for="email" class="label">Email Address</label> <input id="email" type="email" name="email" class="input" placeholder="Enter your email address"> </div>
                            <div class="group"> <label for="pass" class="label">Provided Pin</label> <input id="pin" type="text" class="input" name="pin" placeholder="Enter your provided pin"> </div>
                            <div class="group"> <input type="submit" class="button" name="signup" value="Sign Up"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>   
   <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php include('C:\xampp\htdocs\COLLEGE\footer.php'); ?>

