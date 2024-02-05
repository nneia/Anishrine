<?
require ('db.php');

	$trendings = $pdo -> query('SELECT * FROM `create_post` WHERE `post_date` >= LAST_DAY(CURDATE()) + INTERVAL 1 DAY - INTERVAL 1 MONTH AND `post_date` <= DATE_ADD(LAST_DAY(CURDATE()), INTERVAL 1 DAY) ORDER BY `views` DESC LIMIT 5');
	$watchlist = $pdo -> query('SELECT * FROM `create_post` WHERE watch_list LIKE "add"')
?>



<link rel="stylesheet" href="main-right-side-design.css">
<div class="main-right-side">
	
	<div class="social-block">
		<img src="../images/construction/logo/anilibrary-social.png" alt="" class="social-logo">
		<a href="">
		<img src="../images/construction/instagram.png" alt="" class="social-media-one">
		</a>
		<a href="">
		<img src="../images/construction/facebook.png" alt="" class="social-media-two">
		</a>
		<a href="">
		<img src="../images/construction/twitter.png" alt="" class="social-media-three">
		</a>
	</div>
	

	<h2 class="side-trending-header">Popular posts</h2>
	<div class="side-trending-container">
		<?foreach ($trendings as $key => $trending):?>
		<div class="side-trending-container-element">

			<div class="picture-size">
				<a href="pages/pages.php?id=<?=$trending['post_id']?>">
				<img src=<?echo "../images/post-covers/" . $trending['post_cover']?> alt="" class="side-element-img">
				</a>
			</div>
			<a href="pages/pages.php?id=<?=$trending['post_id']?>" class="side-element-text"><?=$trending['post_title']?></a>
		
		</div>
		<?endforeach?>
	</div>




		<img src="../images/anime-covers/bokunohero.jpg" alt="" class="main-poster-one">
		
		<div class="ad-side"></div>
</div>