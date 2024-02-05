<?
		require('../db.php');
		$posts = $pdo -> query('SELECT * FROM `create_post`  WHERE `category` LIKE "Review" ORDER BY `post_date` DESC LIMIT 7');


		
?>




<link rel="stylesheet" href="archieve-design.css">

<h2 class="reviews-header">ALL ANIME REVIEWS</h2>
<div class="reviews-menu">
	<li class="block-one">SORT BY</li>
	<li class="block-two">Year
		<ul class="block-two-open">
			<li class="block-two-open-block">2019</li>
			<li class="block-two-open-block">2018</li>
			<li class="block-two-open-block">2017</li>
			<li class="block-two-open-block">2016</li>
			<li class="block-two-open-block">2015</li>
		</ul>
	</li>
	<li class="block-three">Views</li>
	<li class="block-four">Rating</li>
	<li class="block-five">Ganre
		<div class="categories">
		<div class="sort-search">
			<p data-id='0' data-category='Action' class="category">Action</p>
			<p data-id='1' data-category='Adventures' class="category">Adventures</p>
			<p data-id='2' data-category='Cars' class="category">Cars</p>
			<p data-id='3' data-category='Comedy' class="category">Comedy</p>
			<p data-id='4' data-category='Drama' class="category">Drama</p>
			<p data-id='5' data-category='Ecchi' class="category">Ecchi</p>
			<p data-id='6' data-category='Fantasy' class="category">Fantasy</p>
			<p data-id='7' data-category='Game' class="category">Game</p>
			<p data-id='8' data-category='Harem' class="category">Harem</p>
			<p data-id='9' data-category='H' class="category">H</p>
			<p data-id='10' data-category='Historical' class="category">Historical</p>
			<p data-id='11' data-category='Horror' class="category">Horror</p>
			<p data-id='12' data-category='Isekai' class="category">Isekai</p>
			<p data-id='13' data-category='Kids' class="category">Kids</p>
			<p data-id='14' data-category='Magic' class="category">Magic</p>
			<p data-id='15' data-category='MartialArts' class="category">Martial Arts</p>
			<p data-id='16' data-category='Mecha' class="category">Mecha</p>
			<p data-id='17' data-category='Military' class="category">Military</p>
			<p data-id='18' data-category='Music' class="category">Music</p>


			<p data-id='19' data-category='Mystery' class="category">Mystery</p>
			<p data-id='20' data-category='Parody' class="category">Parody</p>
			<p data-id='21' data-category='Police' class="category">Police</p>
			<p data-id='22' data-category='Psychological' class="category">Psychological</p>
			<p data-id='23' data-category='Romance' class="category">Romance</p>
			<p data-id='24' data-category='Samurai' class="category">Samurai</p>
			<p data-id='25' data-category='School' class="category">School</p>
			<p data-id='26' data-category='Sci-Fi' class="category">Sci-Fi</p>
			<p data-id='27' data-category='Seinen' class="category">Seinen</p>
			<p data-id='28' data-category='Shoujo' class="category">Shoujo</p>
			<p data-id='29' data-category='ShoujoAi' class="category">Shoujo Ai</p>
			<p data-id='30' data-category='Shounen' class="category">Shounen</p>
			<p data-id='31' data-category='ShounenAi' class="category">Shounen Ai</p>
			<p data-id='32' data-category='SliceofLife' class="category">Slice of Life</p>
			<p data-id='33' data-category='Space' class="category">Space</p>
			<p data-id='34' data-category='Sports' class="category">Sports</p>
			<p data-id='35' data-category='SuperPower' class="category">Super Power</p>
			<p data-id='36' data-category='Supernatural' class="category">Supernatural</p>
			<p data-id='37' data-category='Thriller' class="category">Thriller</p>
			<p data-id='38' data-category='Yaoi' class="category">Yaoi</p>
			<p data-id='39' data-category='Yuri' class="category">Yuri</p>

		</div>
	</div>
	</li>
</div>
<div class="all-anime-container">
	<?foreach ($posts as $key => $top): ?>
	<div class="anime-container">
		<a href="../../pages/pages.php?id=<?=$top['post_id']?>">
				<img class="latest-reviews-img"  src=<?echo "../../images/anime-covers/" . $top['anime_cover']?> alt="">
				<p class="anime-title"><a class="link" href="../../pages/pages.php?id=<?=$top['post_id']?>" style="color: black!important;" > <?=$top['post_title']?></a></p>
		
		</a>
	</div>
	<?endforeach?>
</div>