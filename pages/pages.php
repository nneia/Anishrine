<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pages</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="pages-style.css">
</head>
<body>
	<? $post_id = $_GET['id'];
		?>
	




	<?
	require '../menu-new/menu-new.php';?>
	<?require 'title/title.php';?>

	<?require 'illustrsations/illustrations.php';?>
	<?require 'mycomment/comment.php';?>
	<?require 'highlights/highlights.php';?>
	<?require 'conclusion/conclusion.php';?>
		
	<?require 'post-comments/comments.php';?>
	<?require '../footer/footer.php';?>
</body>
</html>