			<? 
	require('db.php');
	
	$trendings = $pdo -> query('SELECT * FROM `create_post` WHERE `post_time` >= LAST_DAY(CURDATE()) + INTERVAL 1 DAY - INTERVAL 1 MONTH AND `post_time` <= DATE_ADD(LAST_DAY(CURDATE()), INTERVAL 1 DAY) ORDER BY `views` DESC LIMIT 5');

	?>




		<img src="../../images/anime-covers/bokunohero.jpg" alt="" class="right-side-ad">
		
		
		<p class="side-trending-header">Trending</p>
		<div class="side-trending-container">
		<?foreach ($trendings as $key => $trending):?>
			<div class="side-trending-container-element">
				<div class="picture-size"><a href="../../pages/pages.php?id=<?=$trending['post_id']?>"><img src=<?echo "../../images/anime-covers/" . $trending['post_img']?> alt="" class="side-element-img"></a></div>
				<a href="../../pages/pages.php?id=<?=$trending['post_id']?>" class="side-element-text"><?=$trending['post_title']?></a>
			</div>
		<?endforeach?>
		</div>