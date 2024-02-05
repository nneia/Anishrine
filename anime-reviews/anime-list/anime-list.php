<?
		require('../db.php');
		$posts = $pdo -> query('SELECT * FROM `create_post`  WHERE `category` LIKE "Review" ORDER BY `post_date` DESC LIMIT 8');


		
?>

<link rel="stylesheet" href="anime-list-design.css">
<h2 class="latest-reviews-header-new">Latest Anime Reviews</h2>
<div class="latest-reviews-container">
	
	<?foreach ($posts as $key => $latestReviews): ?>
	<div class="container-latest-reviews">
		<div class="anime-cover-size">
		<a href="../../pages/pages.php?id=<?=$latestReviews['post_id']?>">
			<img class="latest-reviews-img"  src=<?echo "../../images/anime-covers/" . $latestReviews['anime_cover']?> alt="">

		</a>
			</div>
		<div class="latest-reviews-text">
			
			
				<p class="anime-latest-title"><a class="link" href="../../pages/pages.php?id=<?=$latestReviews['post_id']?>" style="color: black!important;" > <?=$latestReviews['post_title']?></a></p>
			
		</div>
	</div>
	<?endforeach?>
	
</div>
