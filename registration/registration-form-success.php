<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="registration-form-design-success.css">
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
				<div class="registration-success">
					<img src="../images/construction/success-icon.png" alt="" class="success-icon">
					<p class="notification">Your registration is finished</p>
				</div>
				<div class="login-container">
					<h2 class="login-header">Login</h2>
					<div class="login-area">
						<div class="username-login-div">
							<input type="text" id="loguser" class="username-login" placeholder="Username or Email">
						</div>
						<div class="password-login-div">
							<input type="password" id="logpassword" class="password-login" placeholder="Password">
						</div>
						<p class="login-error"></p>
						<button id="log_btn" class="login-btn">Login</button>
					</div>
				</div>
			</div>
		</div>
	</div>







	<?require "../footer/footer.php";?>
	
</body>
</html>