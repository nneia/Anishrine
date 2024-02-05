<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Watch List</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="watch-list-design.css">
</head>
<body>
	<? $post_id = $_GET['id'];?>
	<?require '../menu-new/menu-new.php';?>
	<div class="margin-area"></div>
	<?require 'introduction/introduction.php';?>
	<?require 'watch-list/watch.php';?>
	<?require '../footer/footer.php';?>
	<script src="recieve-data.js"></script>

</body>
</html>