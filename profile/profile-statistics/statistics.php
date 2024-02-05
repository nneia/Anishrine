<?
		require('../db.php');
		$posts = $pdo -> query('SELECT * FROM `create_post`  WHERE `category` LIKE "Review" ORDER BY `post_date` DESC LIMIT 10');
		$id = $_GET['id'];
		$sql = $pdo -> prepare('SELECT * FROM `user` WHERE `id` = ?');//sql - запрос данных из бд просто название sql
		$sql->execute([$id]);// положить вместо ?(если есть) значение, запустить запрос
		$custom = $sql -> fetch();//получение строки данных из бд(1строка), если больше 1 строки то fetchAll
		
?>

<div class="statistics-menu">
	<li class="tab-start"></li>
	<img src="../../images/construction/user.svg" alt="" class="profile-icon">
	<li class="tab">Profile</li>
	<img src="../../images/construction/list.svg" alt="" class="profile-icon">
	<li class="tab">Anime Lists</li>
	<img src="../../images/construction/fav.svg" alt="" class="profile-icon">
	<li class="tab">Favorite Anime</li>
	<img src="../../images/construction/character.svg" alt="" class="profile-icon">
	<li class="tab">Favorite Characters</li>
	<img src="../../images/construction/medal.svg" alt="" class="profile-icon">
	<li class="tab">Medals</li>
	<img src="../../images/construction/mail-white.svg" alt="" class="profile-icon">
	<a href="messages.php?id=<?=$id?>"><li class="tab">Messages</li></a>
	<li class="tab-end"></li>
</div>
<div class="statistics-container">
 	<div class="profile-statistics">
 		<div class="container-left">

 			<div class="stats-box">
 				<h3 class="stats-header"><?echo $custom['username'] . "'s stats:"?></h2>
 				<li class="stats">Rating #84</li>
 				<li class="stats">Anime Watched: 383</li>
 				<li class="stats">Comments Left: 1167</li>
 				<li class="stats">Time on Site: 11h37m</li>
 				<li class="stats">Awards: 51</li>
 				<li class="stats">Joined: 04.12.2019</li>
 			</div>

 			<div class="about-me-box">
 			<div class="bio">
 				<h2 class="about-header">Bio:</h2>
 			</div>
 			<p class="about"><?echo $custom['bio']?></p>
 			</div>
			
			<div class="container-header">
				<h2 class="discussion-header">Profile Comments</h2>
				<p class="view">+ view all</p>
			</div>
 			<div class="profile-comment">
				<div class="profile-user-comment">
					<img src="../../images/users/user7.jpg" alt="" class="comment-avatar-user">
					<p class="comment-nickname-user">Rukia</p>
				</div>
				<div class="profile-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae excepturi vero illum mollitia pariatur accusamus 
				</div>
				<div class="comment-info">
					<p class="comment-date">Apr 14, 3AM</p>
					<img src="../../images/construction/" alt="" class="comment-like">
				</div>
			</div>

			<div class="profile-comment">
				<div class="profile-user-comment">
					<img src="../../images/users/user7.jpg" alt="" class="comment-avatar-user">
					<p class="comment-nickname-user">Rukia</p>
				</div>
				<div class="profile-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae excepturi vero illum mollitia pariatur accusamus 
				</div>
				<div class="comment-info">
					<p class="comment-date">Apr 14, 3AM</p>
					<img src="../../images/construction/" alt="" class="comment-like">
				</div>
			</div>


 		</div>
 		<div class="container-right">

 			<h3 class="feed-header">Feed</h3>
 			<p class="create-button">+ Write a Post</p>
 			<!--INSERT INTO `feed` (post_text, post_image) VALUES("lorem", "image.jpg")
			<require connect.php?>
			$user_id = $_SESSION['user_id']; это айди вошедшего пользователя
			$author_id = $ user_id;
 			-->

 				<div class="user-box">
					<img src="../../images/users/user2.jpg" alt="" class="post-user-image">
					<div class="online-sign"></div>
					<div class="user-info">
						<p class="post-user-nickname">Kobayashi </p>
						<p class="post-timer">Today AT 7:37 PM</p>
					</div>
				</div>
				<p class="user-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, libero asperiores! Iusto ut, est, facilis dignissimos assumenda sit neque blanditiis deleniti eum libero facere aspernatur numquam repudiandae quas labore enim!</p>
				
				<div class="post-box">
					<div class="repost-box">
						<img src="../../images/users/user5.jpg" alt="" class="repost-user-image">
						<div class="online-sign-repost"></div>
						<div class="repost-user-info">
							<p class="repost-user-nickname">Kobayashi </p>
						<p class="repost-timer">Today AT 7:37 PM</p>
						</div>
					</div>
					<p class="repost-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, libero asperiores! Iusto ut, est, facilis dignissimos assumenda sit neque blanditiis deleniti eum libero facere aspernatur numquam repudiandae quas labore enim!</p>
					<img src="../../images/community-images/Journey_to_the_Unknown-copy.jpg" alt="" class="repost-image">
					
				</div>
				<div class="repost-interactions">
					<div class="like">
						<div class="shapeshifter  likes-icon"  style="background-image: url(../../images/construction/like-animation/sprite_60fps.svg)"></div>
						<script>
						document.querySelectorAll('.shapeshifter').
							forEach( function(element, index) {
							element.addEventListener('click', function () {
							element.classList.toggle("play")
										});
									})
	
								</script>
						<p class="number-likes">71</p>
					</div>
					<div class="comments">
						<img src="../../images/construction/comment.svg" alt="" class="comment-icon">
						<p class="comments-number">1</p>
					</div>
					
				</div>
				<div class="post-comments">
						<div class="comment-box">
							<img src="../../images/users/user6.jpg" alt="" class="user-post-comments-image">
							<div class="online-sign-comments"></div>		
							<div class="user-comment-box">
								<p class="user-nickname-comment">Tachibana</p>
								<p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex necessitatibus nobis quasi odit</p>
							<div class="interactions-comments">
								<p class="comment-date"> 9 Oct 2018</p>
								<p class="reply">Reply</p>
							</div>
							</div>
						</div>
						<div class="comment-box">
							<img src="../../images/users/user6.jpg" alt="" class="user-post-comments-image">
							<div class="online-sign-comments"></div>
							<div class="user-comment-box">
								<p class="user-nickname-comment">Tachibana</p>
								<p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex necessitatibus nobis quasi odit</p>
							<div class="interactions-comments">
								<p class="comment-date"> 9 Oct 2018</p>
								<p class="reply">Reply</p>
							</div>
							</div>
						</div>

				</div>




 		</div>
 		
 	</div>

 	<div class="user-fav">
 			<h2 class="favorites-header">Favorite Anime</h2>
 			<div class="favorite-anime">
 				<?foreach ($posts as $key => $latestReviews): ?>
 				<div class="anime">
 					<img src="../../images/construction/fav-color.svg" alt="" class="fav-color">
 					<a class="image-link" href="../../pages/pages.php?id=<?=$latestReviews['post_id']?>">
					<img class="latest-reviews-img"  src=<?echo "../../images/anime-covers/" . $latestReviews['anime_cover']?> alt="">

					</a>
					<p class="anime-latest-title"><a class="link" href="../../pages/pages.php?id=<?=$latestReviews['post_id']?>" style="color: black!important;" > <?=$latestReviews['post_title']?></a></p>
 				</div>
 				<?endforeach?>
 			</div>
 			<p class="view-more">+ view more</p>
 		<div class="ad"></div>
 		<h2 class="favorites-header">Favorite Characters</h2>

 		<div class="character-list">
 			<div class="character">
 				<img src="../../images/construction/fav-color.svg" alt="" class="fav-color">
 				<img src="../../images/characters/megumin.jpg" alt="" class="character-image">
 				<p class="character-name">Megumin</p>
 				<p class="origin">From: <u class="origin-title">Kono Subarashi Sekai</u></p>
 			</div>
 			<div class="character">
 				<img src="../../images/construction/fav-color.svg" alt="" class="fav-color">
 			<img src="../../images/characters/narberal.jpg" alt="" class="character-image">
 			<p class="character-name">Narberal Gamma</p>
 			<p class="origin">From: <u class="origin-title">Overlord</u></p>
	 		</div>
	 		<div class="character">
	 			<img src="../../images/construction/fav-color.svg" alt="" class="fav-color">
	 			<img src="../../images/characters/kenshin.jpg" alt="" class="character-image">
	 			<p class="character-name">Kenshin</p>
	 			<p class="origin">From: <u class="origin-title">Samurai Kenshin</u></p>
	 		</div>
 		</div>
 		<p class="view-more">+ view more</p>
 	</div>
	
	<h3 class="comments-header">(0) Comments</h2>
 	<div class="user-comments-container">
 		<div class="user-comments">
 			
 			<div class="posted-comment-container">
 		
 					<div class="posted-user">
 						<img src="../images/users/user5.jpg" alt="" class="posted-comment-user-image">
 						<div class="posted-comment-online"></div>
 						<div class="posted-username-box">
 						<p class="posted-username">Takumi</p>
 						<p class="level">Rank: #21</p>
 						<p class="level">Level: [Expert]</p>
 						</div>
 						
 					</div>
 				</div>
 		
 				<div class="posted-comment">
 					<div class="comment-info">
 						<p class="username-posted">Takumi, 18.05.2019 | At 6:04 PM</p>
 						<div class="report-box">
 									<img src="../images/construction/report.svg" alt="" class="report-icon">
 									<p class="report">Report</p>
 								</div>
 					</div>
 					<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni laborum velit officia totam nulla ipsa voluptatum porro, alias aspernatur modi perferendis obcaecati at repellat eius perspiciatis beatae, maxime, vero ipsum.</p>
 					<div class="reply-comment-box">
 						<img src="../images/construction/reply-icon.svg" alt="" class="reply-icon">
 						<p class="reply-comment">Reply</p>
 					</div>
 				</div>
 		
 		</div>
 		<div class="user-comments">

		

		<div class="posted-comment-container">
			<div class="posted-user">
				<img src="../images/users/user5.jpg" alt="" class="posted-comment-user-image">
				<div class="posted-comment-online"></div>
				<div class="posted-username-box">
				<p class="posted-username">Takumi</p>
				<p class="level">Rank: #21</p>
				<p class="level">Level: [Expert]</p>
				</div>
				
			</div>
		</div>
		<div class="posted-comment">
			<div class="comment-info">
				<p class="username-posted">Takumi replied, 18.05.2019 | At 6:04 PM</p>
				<div class="report-box">
							<img src="../images/construction/report.svg" alt="" class="report-icon">
							<p class="report">Report</p>
						</div>
			</div>
			
			<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni laborum velit officia totam nulla ipsa voluptatum porro, alias aspernatur modi perferendis obcaecati at repellat eius perspiciatis beatae, maxime, vero ipsum.</p>
			<div class="replied-to">Replied to:</div>
			<div class="reply-post-box">
				<div class="reply-post">
					<div class="reply-user-box">
						<img src="../images/users/NeiaLancia.jpg" alt="" class="reply-user-image">
						<div class="online-user-reply"></div>
						<div class="reply-user-nick">
							<p class="reply-username">Neia</p>
							<p class="level-reply">Rank: #21</p>
							<p class="level-reply">Level: [Expert]</p>
						</div>
					</div>
				</div>
				<div class="reply-text">
					<div class="reply-comment-info">
						<p class="username-reply">Takumi, 18.05.2019 | At 6:04 PM</p>

					</div>
					<p class="reply-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni laborum velit officia totam nulla ipsa voluptatum porro, alias aspernatur modi perferendis obcaecati at repellat eius perspiciatis beatae, maxime, vero ipsum.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-margins">
	<div class="pages-selector">
			<a href="" class="page-number" style="color: #1C3380;">«</a>
			<a href="" class="page-number onit">1</a>
			<a href="" class="page-number">2</a>
			<a href="" class="page-number">3</a>
			<a href="" class="page-number">4</a>
			<a href="" class="page-number">5</a>
			<a href="" class="page-number" style="color: #1C3380;">»</a>
		</div>
</div>
	<div class="discussion-comment-create">

		

		<div class="post-comment-container">
			<div class="posted-user">
				<img src="../images/users/NeiaLancia.jpg" alt="" class="posted-comment-user-image">
				<div class="posted-comment-online"></div>
				<div class="posted-username-box">
					<p class="posted-username">Takumi</p>
					<p class="level">Rank: #21</p>
					<p class="level">Level: [Expert]</p>
				</div>
				
			</div>
		</div>
		<div class="my-text-area">
			<div class="edit-panel">
				<div class="bold-box">
					<img src="../images/construction/bold.svg" alt="" class="bold-icon">
				</div>
				<div class="bold-box">
					<img src="../images/construction/italic.svg" alt="" class="bold-icon">
				</div>
				<div class="bold-box">
					<img src="../images/construction/underline.svg" alt="" class="bold-icon">
				</div>
				<div class="bold-box">
					<img src="../images/construction/picture.svg" alt="" class="bold-icon">
				</div>
			</div>
			<input contenteditable="true" placeholder="Leave a comment..." type="text" class="post-comment">
			<button class="post">Post</button>
		</div>

			
	</div>

 	</div>

</div>