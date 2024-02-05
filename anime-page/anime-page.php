<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Anime Page</title>
	<link rel="stylesheet" href="anime-page.css">
</head>
<body>
	<?
	require '../menu-new/menu-new.php';
	?>
	<div class="margin-area"></div>
	
	<div class="background-fade">
		<img src="../images/community-images/gate-background.jpg" alt="" class="anime-background">
	</div>
	

	<div class="page-full">

		

		<div class="page-left">
			<?require 'page-left.php'?>
		</div>



		<div class="page-right">
			<?require 'page-right.php'?>
		</div>



	</div>




	



		



	<?
	require '../footer/footer.php';
	?>

</body>
</html>