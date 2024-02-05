<?require '../connect.php';?>
<?
		$id = $_GET['id'];
		$sql = $pdo -> prepare('SELECT * FROM `user` WHERE `id` = ?');//sql - запрос данных из бд просто название sql
		$sql->execute([$id]);// положить вместо ?(если есть) значение, запустить запрос
		$custom = $sql -> fetch();//получение строки данных из бд(1строка), если больше 1 строки то fetchAll

		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="edit-design.css">
	<title>Document</title>
</head>
<body>
	<?
	require '../menu-new/menu-new.php';
	?>
	<div class="margin-area"></div>

	<div class="user-background">
		
		<img  class="user-cover" src=<?echo "../../images/user-covers/" . $custom['user_cover']?> >
	
	</div>

	<div class="user-container">
		<div class="avatar-box">
		
		</div>

	
		<img class="user-icon" src=<?echo "../../images/users/" . $custom['user_avatar']?>>
	
	
		<div class="user">
			<h2 class="edit-header">EDIT MODE</h1>

		</div>
		
	</div>

	<div class="statistics-menu">
		<li class="tab-start"></li>
		<li class="tab">Profile editining</li>
		<li class="tab">Anime Lists</li>
		<li class="tab">My favorite anime</li>
		<li class="tab">My favorite characters</li>
		<li class="tab">Medals</li>
		<li class="tab">Awards</li>
		<li class="tab-end"></li>
	</div>
	
	<div class="statistics-container">
		

		<div class="edit-area">
			<div class="editing-box">
				
				<h3 class="editing-header">Username</h3>
			
				<input type="text" id="username" placeholder="<?echo$custom['username']?>" class="edit-input">
			
			</div>
			<div class="editing-box">
				
				<h3 class="editing-header">Birthdate</h3>
			
				<input type="date" id="birthdate" placeholder="16..." class="edit-input">
			
			</div>
			<div class="editing-box">
				
				<h3 class="editing-header">Gender</h3>
			
				<select class="edit-input" name="gender" id="gender">
					<option > </option>
					<option > Male</option>
					<option > Female</option>
					<option > Other</option>
				</select>
			
			</div>
			<div class="editing-box">
				
				<h3 class="editing-header">Location</h3>
			
				<input type="text" placeholder="Japan" class="edit-input" id="location">
			
			</div>
			<div class="editing-box">
				
				<h3 class="editing-header">Avatar:</h3>
			
				<div class="edit-avatar">
					<img src="../images/users/NeiaLancia.jpg" alt="" class="edit-avatar-img">
					<input id="avatar" type="file" class="upload-avatar">
				</div>
			
			</div>
			<div class="editing-box">
				
				<h3 class="editing-header">Profile Cover:</h3>
			
					<div class="cover-cut">
						<img src="../images/user-covers/<?=$custom["user_cover"]?>" alt="" class="edit-cover-img"> 
						<input id="cover" type="file" class="upload">
					</div>

			</div>
			<div class="editing-box">
				
				<h3 class="editing-header">Bio:</h3>
			
				<textarea type="text" id="bio" placeholder="Tell about Yourself" class="edit-bio"></textarea>
			
			</div>
			<button id="save" class="save">Save changes</button>
			<a href="profile-page.php?id=<?=$id?>"><button id="cencel" class="cancel">Cancel</button></a>
		</div>


	</div>
	






	<?require '../footer/footer.php'?>
</body>
<script src="edit.js"></script>
</html>
