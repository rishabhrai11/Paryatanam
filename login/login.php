<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Paryatanam-login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form class="modal-content animate" action="signupaction.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="Username" >
			<input type="email" name="email" placeholder="Email" id="email" class="tb" required>
			<input type="password" name="password" placeholder="Password" minlength="8" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." required>
			<input type="submit" name="submit" value="Sign Up" class="btn"  ></button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form name="myForm1" action="loginaction.php" method="post">
  			<h1>Sign in</h1>
  			<div class="social-container">
    			<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
    			<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
    			<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
  			</div>
  			<span>or use your account</span>
  				<input type="email" name="email" placeholder="Email" id="email" class="tb" required>
  				<input type="password" name="password" placeholder="Password" id="pwd1" required>
  				<input type="submit" name="submit" value="Login" class="btn">
		</form>

	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signIn" >Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>


<!-- partial -->
  <script  src="assets/js/script.js"></script>
	


</body>
</html>
