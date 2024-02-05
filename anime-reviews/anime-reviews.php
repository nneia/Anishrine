<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Anilibrary</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="anime-reviews-design.css">
	
</head>
<body>


	<?
	require '../menu-new/menu-new.php';?>
	<div class="margin-area"></div>
	<div class="sides">
		<div class="left">
			<?require 'search-panel/search.php';
			require 'anime-list/anime-list.php';
			?>
		</div>
		<div class="right"><?require 'anime-reviews-r-side/anime-reviews-r-side.php';?></div>
	</div>
	<?require 'sorted-tops/sorted-top.php'?>
	<?require 'anime-archieve/archieve.php';?>
	<?require '../footer/footer.php';?>







		
</body>
<script src="main.js"></script>
<script src="../category.js"></script>
<script src="../ajax.js"></script>
</html>