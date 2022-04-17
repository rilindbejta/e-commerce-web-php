<html>
<head>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="../assets/login.inc.php" method="post">
				<h1>Sign in</h1> <br>
                <input type="email" name="email" id="email" placeholder="Email" />
                <small class="errorL"></small>
                <input type="password" name="password" id="password" placeholder="Password" />
                <small class="errorL"></small>
				<a href="#" style="color: black">Forgot your password?</a>
				<a href=""><button name="login" id="signInSubmit">Sign in</button></a>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyLoginInput"){
                            echo "<small class='error'>Fill in all fields!</small>";
                        }
                        else if($_GET['error'] == "wrongPassword"){
                            echo "<small class='error'>Wrong password!</small>";
                        }
                        else if($_GET['error'] == "emailNotFound"){
                            echo "<small class='error'>Email doesn't exist!</small>";
                        }
                    }
                ?>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form method="post">
				<h1>Create Account</h1> <br>
				<input type="text" name="name" placeholder="Full Name" />
				<input type="text" name="username" placeholder="Username" />
				<input type="date" name="birthday" placeholder="Birthday" />
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<button type="submit" id="register" name="register">Sign Up</button>
                <?php 
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyInput"){
                            echo "<small class='error'>Please fill all the fields!</small>";
                        }
                        else if($_GET['error'] == "invalidUsername"){
                            echo "<small class='error'>Invalid username!</small>";
                        }
                        else if($_GET['error'] == "invalidEmail"){
                            echo "<small class='error'>Invalid email!</small>";
                        }
                        else if($_GET['error'] == "invalidPassword"){
                            echo "<small class='error'>Invalid password!</small>";
                        }
                        else if($_GET['error'] == "emailTaken"){
                            echo "<small class='error'>Email is already taken!</small>";
                        }
                        else if($_GET['error'] == "usernameTaken"){
                            echo "<small class='error'>Username is already taken!</small>";
                        }
                    }
                ?>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Hello, </h1>
					<p>Sign Up, to order products with the best offers!</p>
					<button class="ghost" id="signIn">Sign Up</button>
				</div>
				<div class="overlay-panel overlay-right">
                    <h1>Log in your account!</h1>
					<p>To keep connected with us please login with your personal info!</p>
					<button class="ghost" id="signUp">Sign In</button>
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