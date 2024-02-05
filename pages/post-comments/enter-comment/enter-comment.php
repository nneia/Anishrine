<?
	require('../db.php');
		$comment = $pdo -> query("SELECT * FROM `create_post` ORDER BY `post_date` DESC LIMIT 3");
?>

<link rel="stylesheet" href="">
<div class="genre-list-area">
	<div class="primary-anime">
		<p class="primary-anime-header">Current anime</p>
		<img src="../../../images/anime-covers/gate-cover.jpg" alt="" class="primary-anime-image">
		<p class="current-anime-title">Jieitai Kano Chi Nite, Kaku Tatakaeri</p>
		<p class="added-by">Added by: Bizhan</p>
		
	</div>
	<div class="similar-anime-container">
		<p class="similar-anime-header">Similar Anime</p>
		<div class="similar-anime-area">
			<div class="similar-anime">
				<img src="../../../images/anime-covers/gate-cover.jpg" alt="" class="similar-anime-image">
				<p class="current-anime-title">Jieitai Kano Chi Nite, Kaku Tatakaeri</p>
				<p class="added-by">Added by: Bizhan</p>
				<p class="agree-number">134 Users Agree</p>
				<button class="agree">Agree</button>

			</div>
			<div class="similar-anime">
				<img src="../../../images/anime-covers/gate-cover.jpg" alt="" class="similar-anime-image">
				<p class="current-anime-title">Jieitai Kano Chi Nite, Kaku Tatakaeri</p>
				<p class="added-by">Added by: Bizhan</p>
				<p class="agree-number">134 Users Agree</p>
				<button class="agree">Agree</button>
			</div>
			<div class="similar-anime">
				<div class="similar-anime-image"><img src="../../../images/construction/add-icon.svg" alt="" class="add-cover"></div>
				<p class="current-anime-title">
					<div class="add-border">
						<img src="../../../images/construction/add-icon.svg" alt="" class="add-title">
					</div>
				</p>
			</div>

		</div>
		

	</div>
</div>
<h3 class="post-comments-header">Comments</h2>
<div class="enter-comment-area">
	<textarea placeholder="Enter your comment here..." class="comment-area-text" id="" cols="30" rows="10"></textarea>
	<img src="../../../images/construction/picture.svg" alt="" class="add-img">
</div>
