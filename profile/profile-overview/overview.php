<?
$id = $_SESSION['user_id'];
$sql = $pdo -> prepare('SELECT * FROM `user` WHERE `id` = ?');//sql - запрос данных из бд просто название sql
$sql->execute([$id]);// положить вместо ?(если есть) значение, запустить запрос
$custom = $sql -> fetch();//получение строки данных из бд(1строка), если больше 1 строки то fetchAll

		?>




<link rel="stylesheet" type="text/css" href="../../images/construction/like-animation/sprite_60fps.css">


<div class="user-background">
	<div class="edit-box">
		<div class="image-border">
			<img id="edit_background" src="../../images/construction/edit.svg" alt="" class="edit-icon">
		</div>
	</div>
	<img  class="user-cover" src=<?echo "../../images/user-covers/" . $custom['user_cover']?> >
	
</div>
<a href="edit.php?id=<?=$id?>"><button class="edit-button">+ Edit Profile</button>	</a>
<div class="user-container">
	<div class="avatar-box">
		
	</div>

	
	<img class="user-icon" src=<?echo "../../images/users/" . $custom['user_avatar']?>>
	
	
	<div class="user">
		<div class="status"></div>
		<h1 class="user-nick"><?echo $custom['username']?></h1>

	</div>
	<div class="interactions">
		<div class="like" id="area-profile">
			<div class="shapeshifter  like-page" id="page_like"  style="background-image: url(../../images/construction/like-animation/sprite_60fps.svg)"></div>
			
			<p class="action-one">Like(11425)</p>
		</div>
		<a href="messages.php?id=<?=$id?>">
		<p class="action-two">Message</p>
		</a>
	</div>
	<script>
								
							var area = document.getElementById("area-profile");
							
										var animelike = document.getElementById('page_like');
										area.addEventListener( 
										'click', function () {
										animelike.classList.toggle("play")
													});
	
							</script>

	
</div>


<div class="upload hide" id="modal">
		<img src="../../images/construction/exit-icon.svg" id="exit" class="exit">
		<h2 class="upload-header">Change profile cover</h2>
		<input type="file" class="upload-inp" name="image" id="cover">
		<button id="sent" class="sent">Sent</button>
		
	</div>

<script>
	/*shadow*/
	var Shdiv = document.createElement('div');
		Shdiv.classList.add('shadow');
		
	function ShowDiv (argument) {
		document.querySelector(".user-container")
		.appendChild(Shdiv);
		//document.getElementsByClassName("shadow").classList.add("shadowhover");
		return true
	}
	function RemoveDiv (argument) {
		document.querySelector(".user-container")
		.removeChild(Shdiv);
		return true
	}
	
	edit_background.onclick = function (event) {
		ShowDiv();
		modal.classList.remove('hide');
	}
	exit.onclick = function (event) {
		RemoveDiv();
		modal.classList.add('hide');
	}
	
</script>
<script src="../../axios.min.js"></script>
<script>
	
	sent.onclick = function (event) {
		console.log(cover.files);
		axios.post("sent.php", cover.files[0])
		.then(function (response) {
			console.log(response);
				RemoveDiv();
				location.reload();			
				modal.classList.add('hide');
		});
	}

</script>



