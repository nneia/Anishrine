<?
require ('../db.php');

$trendings = $pdo -> query('SELECT * FROM `create_post` WHERE `post_time` >= LAST_DAY(CURDATE()) + INTERVAL 1 DAY - INTERVAL 1 MONTH AND `post_time` <= DATE_ADD(LAST_DAY(CURDATE()), INTERVAL 1 DAY) ORDER BY `views` DESC LIMIT 5');

?>

<link rel="stylesheet" href="weekly-r-side-design.css">

<div class="container-side-two">
	
	<img src="../../images/anime-covers/bokunohero.jpg" alt="" class="side-picture-two">

	<p class="side-trending-header">Trending</p>
	<div class="side-trending-container">
		<?foreach ($trendings as $key => $trending):?>
		<div class="side-trending-container-element">
			<div class="picture-size"><a href="../../pages/pages.php?id=<?=$trending['post_id']?>"><img src=<?echo "../../images/anime-covers/" . $trending['post_img']?> alt="" class="side-element-img"></a></div>
			<a href="../../pages/pages.php?id=<?=$trending['post_id']?>" class="side-element-text"><?=$trending['post_title']?></a>
		</div>
		<?endforeach?>
		<!--<div class="side-trending-container-element">
			<img src="../../images/anime-covers/blackclover.jpg" alt="" class="side-element-img">
			<p class="side-element-text">Trending Text</p>
		</div>
		<div class="side-trending-container-element">
			<img src="../../images/anime-covers/blackclover.jpg" alt="" class="side-element-img">
			<p class="side-element-text">Trending Text</p>
		</div>
		<div class="side-trending-container-element">
			<img src="../../images/anime-covers/blackclover.jpg" alt="" class="side-element-img">
			<p class="side-element-text">Trending Text</p>
		</div>
		<div class="side-trending-container-element">
			<img src="../../images/anime-covers/blackclover.jpg" alt="" class="side-element-img">
			<p class="side-element-text">Trending Text</p>
		</div>-->
		
	</div>
</div>