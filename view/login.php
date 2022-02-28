<html>
<head>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
			<h1>Create Account</h1> <br>
			<input type="text" name="name" placeholder="Full Name" />
			<input type="text" name="username" placeholder="Username" />
			<input type="date" name="birthday" placeholder="Birthday" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="register">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1> <br>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info!</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, </h1>
				<p>Sign Up, to order products with the best offers!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

    <script src="./js/login.js"></script>
    <?php 
	include_once '../controller/userController.php'; 
	?> 

</body>
</html> 
