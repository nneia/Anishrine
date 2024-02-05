<?
require '../connect.php';
		$id = $_GET['id'];
		$sql = $pdo -> prepare('SELECT * FROM `user` WHERE `id` = ?');//sql - запрос данных из бд просто название sql
		$sql->execute([$id]);// положить вместо ?(если есть) значение, запустить запрос
		$custom = $sql -> fetch();//получение строки данных из бд(1строка), если больше 1 строки то fetchAll
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?echo $custom['username']?></title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="profile-page-design.css">
</head>
<body>
	<?
	require '../menu-new/menu-new.php';
	?>
	<div class="margin-area"></div>
	<?require 'profile-overview/overview.php';?>
	<?require 'profile-statistics/statistics.php';?>
	<?require '../footer/footer.php'?>
</body>
</html>