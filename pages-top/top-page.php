<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>top-pages</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="top-page-design.css">
</head>
<body>
	<? $post_id = $_GET['id'];
		?>
	<?require '../header/header.php';
	require '../menu/menu.php';?>
	<div class="sides">
		<div class="left">
			<?require 'introduction/introduction.php';?>
			<?require 'anime-position/anime-postion.php';?>
		</div>
		<div class="right">
			<?require 'right-side/right-side-pages-top.php';?>
		</div>
	</div>
	<?require '../footer/footer.php';?>


</body>
</html>