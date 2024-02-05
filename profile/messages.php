
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
	<link rel="stylesheet" href="messages-design.css">
	<title>Messages</title>
</head>
<body>

	<?
	require '../menu/menu.php';
	?>

	<div class="area">
		
		<div class="chat-list">
			<div class="account-user">
				<div class="account-l">
					<img src=<?echo "../../images/users/" . $custom['user_avatar']?> alt="" class="user-image">

				</div>
				<div class="account-r">
					<h2 class="account-username"><?echo $custom['username']?></h3>
						<div class="online-box">
						<div class="online-sign"></div>
						<p class="status">Online</p>
					</div>
				</div>
			</div>

			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>

			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>

			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>
			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>
			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>
			<div class="chat-box">
				<div class="chat-l">
					<img src="../images/users/user5.jpg" alt="" class="chat-user-image">
					<div class="online-icon-chat"></div>
				</div>
				<div class="chat-r">
					<div class="chat-info">
						<p class="chat-username">Takumi</p>
						<p class="active">Active 3h ago</p>
					</div>
					<div class="chat-activity">
						<p class="last-message">Hey whats up</p>
						<div class="message-alert">
							
							<img src="../images/construction/mail.svg" alt="" class="mail-icon">
							<p class="unread">1</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="message-list">
			<div class="sent-user">
				<img src=<?echo "../../images/users/" . $custom['user_avatar']?> alt="" class="user-image">
				<div class="user-info">
					<div class="profile">
						<h2 class="account-username"><?echo $custom['username']?></h2>
						<p class="visit">+ visit profile</p>
					</div>
					<div class="online-box">
						<div class="online-sign"></div>
						<p class="status">Online</p>
					</div>
				</div>
			</div>


			<div class="message-box">
				<p class="date">20.05.2019</p>
				<div class="recieve-message">
					<p class="recieve-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, enim dignissimos ducimus eum temporibus dolorum cumque unde explicabo quis. Assumenda quae, magni itaque nam. Minima voluptatibus quis, doloremque doloribus.</p>
					<p class="time">3:51 PM</p>
				</div>
				<div class="recieve-message">
					<p class="recieve-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, </p>
					<p class="time">3:51 PM</p>
				</div>
				<div class="sent">
					<p class="sent-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, </p>
					<p class="time">3:51 PM</p>
				</div>

			</div>


			<div class="message-sent">
				<div class="customize">
					<div class="bold">
						<img src="../images/construction/bold.svg" alt="" class="bold-icon">
					</div>
					<div class="bold">
						<img src="../images/construction/italic.svg" alt="" class="bold-icon">
					</div>
					<div class="bold">
						<img src="../images/construction/underline.svg" alt="" class="bold-icon">
					</div>
					<div class="pic">
						<img src="../images/construction/picture.svg" alt="" class="bold-icon">
					</div>
				</div>
				<input class="input-sent" type="text" placeholder="Message...">
				<button class="enter">Enter</button>
			</div>
		</div>

	</div>


	<?require '../footer/footer.php'?>
	
</body>
</html>