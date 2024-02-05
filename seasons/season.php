<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Anilibrary</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="season-design.css">
	
</head>
<body>


	<div class="top">
		<?
		require '../menu-new/menu-new.php';?>	
	</div>
	<div class="margin-area"></div>
	
		<img src="../images/construction/next-arrow.svg" alt="" class="season-button">
	
	<div class="banner">
		<img src="../images/construction/spring-banner.jpg" alt="" class="banner-img">
		<div class="season-checkbox">
			<h1 class="shade-text">Spring 2019 Anime Season</h1>
			<p class="season-subheader">This season promises to be full of long awaited titles as well as fresh new series </p>
			<div class="season-stats-box">
				<p class="season-stats">You're watched: 0/21</p>
				<p class="notice">*to activate statistics you need to be <u>loged in</u></p>
			</div>
		</div>

	</div>
	
	<div class="container-season">
		<div class="left"><?require 'anime-season/anime-season.php';?></div>
		
			
	</div>

	<?require '../footer/footer.php';?>







		
</body>
<script src="main.js"></script>
</html>