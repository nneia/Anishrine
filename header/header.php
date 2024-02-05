<?
		$sql = $pdo -> prepare("SELECT * FROM `user` WHERE `id` = ? ");
		$sql -> execute([$_SESSION['user_id']]);
		$user = $sql -> fetch();
		
?>
<link rel="stylesheet" href="header-design.css">
	<link rel="stylesheet" href="../style/bootstrap.min.css">
	

	<div class="block-header">
		<header>

			<div class="flex">
				
					<div class="logo-title">
						<a class="anilibrary" href="http://www.anishrine/">
						<img src="../images/construction/logo/logo_transparent_background.png" alt="" class="anilibrary-logo">
						</a>
					</div>
					
					
				

					<div class="header-search">
						<input class="search" type="text">
						<button class="header-search-button"><img src="../images/construction/search.svg" alt="" class="search-icon"></button>
					</div>
					<div class="login-block">
						<button class="login"><a class="a-color" href="../registration/registration-form-success.php">Login</a></button>
						<button  type="button"  data-toggle="modal" data-target="#registration"class="register"><a class="a-color" href="http://www.anishrine/registration/registration-form.php">Sign Up</a></button>
					</div>
				
			</div>
		</header>
	</div>





