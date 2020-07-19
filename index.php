<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Forms</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>

		<div class="hero">

			<div class="form-box">
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn" onclick="Register()">Register</button>
				</div>
				<form action="login.php" method="POST" id="login" class="input-group">
					<input type="text" class="input-field" placeholder="Username/E-mail.." name="mailuid" required="">
					<input type="password" class="input-field" placeholder="Password.." name="pwd" required="">
					<input type="checkbox" class="chech-box" ><span>Remember password</span>
					<button type="submit" class="submit-btn" name="login-submit">Login</button>
				</form>

				<form action="signup.php" method="POST" id="Register" class="input-group">
					<input type="text" class="input-field" placeholder="Username" name="uid" required="">
					<input type="text" class="input-field" placeholder="E-mail" name="mail" required="">
					<input type="password" class="input-field" placeholder="Password" name="pwd" required="">
					<input type="password" class="input-field" placeholder="Repeat password" name="pwd-repeat" required="">
					<input type="checkbox" class="chech-box" ><span>I agree to the terms & conditions</span>
					<button type="submit" class="submit-btn" name="signup-submit">Register</button>


				</form>
			</div>
		</div>

		<script>
			var x=document.getElementById("login");
			var y=document.getElementById("Register");
			var z=document.getElementById("btn");


			function Register() {

				x.style.left="-400px";
				y.style.left="50px";
				z.style.left="110px";

			}

			function login() {

				x.style.left="50px";
				y.style.left="-400px";
				z.style.left="0";

			}

		</script>





</body>
</html>
