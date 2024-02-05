<?
		require('../db.php');
		$posts = $pdo -> query('SELECT * FROM `create_post`  WHERE `category` LIKE "Review" ORDER BY `post_date` DESC LIMIT 7');


		
?>


<meta name="viewport" content="width=device-width, intial-scale=1.0">

<link rel="stylesheet" href="sorted-top-design.css">

<h2 class="top-title">BEST ISEKAI ANIME</h2>
<div class="top-container">
	<?foreach ($posts as $key => $top): ?>
	<div class="anime">
		<a href="../../pages/pages.php?id=<?=$top['post_id']?>">
				<img class="latest-reviews-img"  src=<?echo "../../images/anime-covers/" . $top['anime_cover']?> alt="">
				<p class="anime-title"><a class="link" href="../../pages/pages.php?id=<?=$top['post_id']?>" style="color: black!important;" > <?=$top['post_title']?></a></p>
		
		</a>
	</div>
	<?endforeach?>
</div>
<h2 class="top-title">BEST ROMANCE ANIME</h2>
<div class="top-container">
	
</div>
<h2 class="top-title">BEST DRAMA ANIME</h2>
<div class="top-container">
	
</div>