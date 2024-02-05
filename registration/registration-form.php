<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="registration-form-design.css">
</head>
<body>
	<?require "../header/header.php";?>
	<?require "../menu/menu.php";?>


	<div class="reg-form-container">
		<div class="banner-left">
			<h2 class="banner-header">Join the Community</h2>
		</div>
		<div class="registration-form">
			
			<div class="form">
				<div  class="username-block">
					<p class="username">Username</p>
					<div class="input-container">
						<input id="username" type="text" class="input-username" placeholder="Username">
						<p  class="error-text" id="error-blank">You can't leave blank space</p>
						
					</div>
				</div>
				<div class="mail-block">
					<p class="mail">Email</p>
					<div class="input-container">
						<input id="email" type="email" class="input-email"
						placeholder="example@gmail.com">
						<p  class="error-email" id="error-email">Inner Text</p>
						
					</div>
				</div>
				<div class="password-block">
					<p class="password">Password</p>
					<div class="input-container">
						<input id="password" type="password" class="input-password"
						placeholder="not less than 8 symbols">
						<p class="error-password" id="error-password">	Inner Text</p>
						
					</div>
				</div>
				<div class="repeat-block">
					<p class="repeat">Repeat</p>
					<div class="input-container">
						<input id="repeat" type="password" class="input-repeat" placeholder="passwords should match">
						<p class="error-repeat" id="error-repeat">	Inner TExt</p>
						
					</div>
				</div>

				<div class="captcha"></div>
				<button id="sign-up-btn" class="btn"> Sign Up </button>
				<p class="note">By clicking "Sign Up" you agree to the Terms of Use and Privacy Policy</p>
			</div>
		</div>
	</div>







	<?require "../footer/footer.php";?>
	
</body>
</html>



<script src="../axios.min.js"></script>
<script src="../registration.js"></script>
